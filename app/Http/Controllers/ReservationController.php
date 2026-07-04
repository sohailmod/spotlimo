<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Mail\PaymentReceipt;
use App\Models\MainPassenger;
use App\Models\Reservation;
use App\Models\VehicleType;
use App\Models\Payment;
use App\Models\TempMainPassenger;
use App\Models\TempPayment;
use App\Models\TempReservation;
use App\Services\PaymentService;
use App\Services\ReservationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use GuzzleHttp\Client;



class ReservationController extends Controller
{

    public function getVehicleDetail(Request $request)
    {
        $vehicle = VehicleType::find($request->id);

        $data = [
            ['passengers' => $vehicle->capacity_of_passenger],
            ['bags' => $vehicle->no_of_luggage],
            ['vehicle' => $vehicle],
        ];

        return response()->json($data);
    }

    public function storeReservation(ReservationRequest $request)
    {
        $reservation = app(ReservationService::class)->tempsaveCustomerReservation($request);

        if ($request->vehicle_type_id == 3 || $request->vehicle_type_id == 4 || $request->vehicle_type_id == 5) {
            return redirect()
                ->route('home')
                ->with('success', 'Customer reservation create successfully!');
        }

        return redirect()
            ->route('confirm.reservations', ['payment_code' => $reservation->code]);
    }

    public function calculatePrice(Request $request)
    {
        return app(ReservationService::class)->calculatePrice($request);
    }

    public function confirmReservations(Request $request)
    {
        $reservation = TempReservation::where('code', $request->payment_code)
            ->with('payment', 'mainPassenger')->first();
        // echo "<pre>";
        // print_r($reservation);
        $response = app(PaymentService::class)->getPayment($reservation);
        // echo "<pre>";
        // print_r($response);
        if ($response['status'] == "CREATED") {
            $successURL = $response['links'][1]['href'];

            $payment = $reservation->payment;
            $payment->square_order_id = $response['id'];
            $payment->save();

            return redirect($successURL);
            // $this->sendPaymentReceipt($response, $reservation->code, $payment);
        } else {
            Log::error($response['errors']);

            return $response['errors'];
        }
    }

    public function confirmPayment(Request $request)
    {
        $provider = new PayPalClient;

        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $token = $request['token'];
        $response = $provider->capturePaymentOrder($token);

      

        $payment = TempPayment::where('square_order_id', $token)->first();
        $tempReservation = TempReservation::where('id', $payment['reservation_id'])->first();


        if ($tempReservation) {
            $data['reservation'] = $tempReservation;
            $data['payment'] = $payment;

            if ($payment['reservation_id'] == $tempReservation['id']) {
          
                $id = $tempReservation['id'];
                $payment->status = "PAID";
                $payment->payment_channel = 'PayPal'; // Assuming it's a PayPal payment
                $payment->charge_id = $token;
                $payment->save();

            } else {
                $data['error'] = 'Payment details not found';
            }
        } else {
            $data['error'] = 'Reservation not found';
        }

        $reservation = app(ReservationService::class)->saveCustomerReservation($tempReservation);
// print_r($reservation);
        $this->sendPaymentReceipt($reservation, $payment,$id);
        return view('payment.index', compact('reservation','data'));
    }


    public function sendPaymentReceipt($reservation, $payment)
    {
        $mainPassenger = MainPassenger::where('reservation_id', $reservation->id)->first();
        // $mainPassenger = $reservation->mainPassenger;

        $mailData = [
            'code' => $reservation->code,
            'passenger_name' => $mainPassenger->name,
            'amount' => format_price($payment->amount),
            'status' => $payment->status,
            'charge_id' => $payment->charge_id,
            'payment_channel' => $payment->payment_channel,
        ];

        Mail::to($mainPassenger->email)->send(new PaymentReceipt($mailData));
    }


    public function paymentCancel(Request $request)
{
    return redirect('/'); 
}
}
