<?php

namespace App\Services;

use App\Mail\CustomerReservation;
use App\Models\BookingContact;
use App\Models\MainPassenger;
use App\Models\Payment;
use App\Models\Reservation;
use App\Models\ReservationDetail;
use App\Models\TempBookingContact;
use App\Models\TempMainPassenger;
use App\Models\TempPayment;
use App\Models\TempReservation;
use App\Models\TempReservationDetail;
use App\Models\User;
use App\Models\VehicleType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

use Square\Environment;
use Square\Models\CreatePaymentRequest;
use Square\SquareClient;

class ReservationService
{
    public function saveCustomerReservation($tempReservation)
    {
        $latestReservation = Reservation::orderBy('created_at', 'DESC')->first();
        $request = TempReservation::where('id', $tempReservation['id'])->first();

        $data = new Reservation();
        $data->vehicle_type_id = $request->vehicle_type_id;
        $data->user_id = $request->passenger_id;
        $data->service_type_id = $request->service_type_id;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->miles = $request->miles;

        $this->saveReservationAddress($data, $request);
        $data->passengers = $request->passengers;
        $data->bags = $request->bags;

        $this->saveVehicleDetail($data, $request);

        $data->hours = $request->service_id == 4 ? $request->hours : null;
        $data->airline = $request->airline;
        $data->flight_number = $request->flight_number;
        $data->instructions = $request->instructions;
        $data->meet_and_greet = $request->meet_and_greet ? true : false;
        $data->status = 'Confirm';

        $data->save();

        $data->code = get_order_code($data->id);
        $data->save();

        $this->saveMainPassengerDetail($request, $data->id);

        if ($request->add_booking_contact) {
            $this->saveBookingContact($request, $data->id);
        }

        $this->saveReservationDetail($request->id, $data->id);
        $this->savePayment($request, $data->id);

        // Send customer email

        if ($request->vehicle_type_id == 1 || $request->vehicle_type_id == 2) {
            try {
                Log::debug('Email sent');

                $this->sendCustomerReservationEmail($data, $request);

            } catch (\Exception $e) {
                Log::debug($e->getMessage());
            }
        }

        return $data;
    }

    public function saveMainPassengerDetail($requestID, $id)
    {

        $tempID = $requestID->id;
        $request = TempMainPassenger::where('reservation_id', $tempID);

        $passenger = new MainPassenger();
        $passenger->reservation_id = $id;

        // Use the first() method to get the first matching TempMainPassenger instance.
        $tempMainPassenger = $request->first();

        if ($tempMainPassenger) {
            $user = User::find($tempID);

            if ($user) {
                $passenger->name = $user->name;
                $passenger->email = $user->email;
                $passenger->phone = $tempMainPassenger->phone;
            } else {
                // If there's no user, use the details from the TempMainPassenger instance.
                $passenger->name = $tempMainPassenger->name;
                $passenger->email = $tempMainPassenger->email;
                $passenger->phone = $tempMainPassenger->phone;
            }
        } else {
            // Handle the case when the TempMainPassenger is not found.
            dd("TempMainPassenger not found");
        }

        $passenger->company = $tempMainPassenger->company;
        $passenger->save();
    }

    public function saveBookingContact($request, $id)
    {
        $contact = new BookingContact();
        $contact->reservation_id = $id;
        $contact->name = $request->booking_contact['name'];
        $contact->email = $request->booking_contact['email'];
        $contact->phone = $request->booking_contact['phone'];
        $contact->save();
    }

    public function saveReservationAddress($data, $request)
    {
        // switch ($request->service_id) {
        //     case '1':
        //         $form = $request->from['address'];
        //         $to = $request->to['airport'];
        //         break;
        //     case '2':
        //         $form = $request->from['airport'];
        //         $to = $request->to['address'];
        //         break;
        //     case '3':
        //         $form = $request->from['address'];
        //         $to = $request->to['address'];
        //         break;
        //     case '4':
        //         $form = $request->from['address'];
        //         $to = $request->to['address'];
        //         break;
        //     default:
        //         break;
        // }

        $data->from = $request->from;
        $data->to = $request->to;

        if ($request->service_id == 1 || $request->service_id == 2 || $request->service_id == 3 || $request->service_id == 4) {
            if ($request->stopAddress) {
                $data->to_stop = serialize($request->stopAddress);
            }
        }

        // if ($request->service_id == 4) {
        //     if ($request->waitAddress) {
        //         $data->to_stop = serialize($request->waitAddress);
        //     }
        // }
    }

    public function saveVehicleDetail($data, $request)
    {
        // $vehicleDetail = [
        //     'forward_car_seat' => $request->vehicle_detail['forward_car_seat'],
        //     'rear_car_seat' => $request->vehicle_detail['rear_car_seat'],
        //     'booster_car_seat' => $request->vehicle_detail['booster_car_seat'],
        // ];

        $data->vehicle_detail = $request->vehicle_detail;
    }

    public function saveReservationDetail($requestID,  $id)
    {
        $tempReservationDetail = TempReservationDetail::where('reservation_id', $requestID)->first();

        if ($tempReservationDetail) {
            // Create a new instance of ReservationDetail
            $details = new ReservationDetail();

            // Set the attributes from the retrieved TempReservationDetail instance
            $details->reservation_id = $id;
            $details->price = $tempReservationDetail->price;
            // $details->code = $tempReservationDetail->code;
            $details->gratuity = $tempReservationDetail->gratuity;
            $details->rush_hour_charge = $tempReservationDetail->rush_hour_charge;
            $details->per_mile_charge = $tempReservationDetail->per_mile_charge;
            $details->hours_charge = $tempReservationDetail->hours_charge;
            $details->car_seat = $tempReservationDetail->car_seat;
            $details->booster_seat = $tempReservationDetail->booster_seat;
            $details->meet_greet = $tempReservationDetail->meet_greet;

            // Save the $details instance to the database or perform other operations.
            $details->save();
        } else {
            // Handle the case when the TempReservationDetail is not found.
            dd("TempReservationDetail not found");
        }
    }

    // Temporary Data


    public function tempsaveCustomerReservation(Request $request)
    {
        $latestReservation = TempReservation::orderBy('created_at', 'DESC')->first();

        $data = new TempReservation();
        $data->vehicle_type_id = $request->vehicle_type_id;
        $data->user_id = $request->passenger_id;
        $data->service_type_id = $request->service_id;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->miles = $request->miles;

        $this->tempsaveReservationAddress($data, $request);
        $data->passengers = $request->passengers;
        $data->bags = $request->bags;

        $this->tempsaveVehicleDetail($data, $request);

        $data->hours = $request->service_id == 4 ? $request->hours : null;
        $data->airline = $request->airline;
        $data->flight_number = $request->flight_number;
        $data->instructions = $request->instructions;
        $data->meet_and_greet = $request->meet_and_greet ? true : false;

        $data->save();

        $data->code = get_order_code($data->id);
        $data->save();

        $this->tempsaveMainPassengerDetail($request, $data->id);

        if ($request->add_booking_contact) {
            $this->tempsaveBookingContact($request, $data->id);
        }

        $this->tempsaveReservationDetail($request, $data->id);
        $this->tempsavePayment($request, $data->id);



        return $data;
    }

    public function tempsaveMainPassengerDetail($request, $id)
    {
        $passenger = new TempMainPassenger();
        $passenger->reservation_id = $id;

        if ($request->passenger_id) {
            $user = User::find($request->passenger_id);
            $passenger->name = $user->name;
            $passenger->email = $user->email;
            $passenger->phone = $request->passenger['phone'];
        } else {
            $passenger->name = $request->passenger['name'];
            $passenger->email = $request->passenger['email'];
            $passenger->phone = $request->passenger['phone'];
        }

        $passenger->company = $request->passenger['company'];
        $passenger->save();
    }

    public function tempsaveBookingContact($request, $id)
    {
        $contact = new TempBookingContact();
        $contact->reservation_id = $id;
        $contact->name = $request->booking_contact['name'];
        $contact->email = $request->booking_contact['email'];
        $contact->phone = $request->booking_contact['phone'];
        $contact->save();
    }

    public function tempsaveReservationAddress($data, $request)
    {
        switch ($request->service_id) {
            case '1':
                $form = $request->from['address'];
                $to = $request->to['airport'];
                break;
            case '2':
                $form = $request->from['airport'];
                $to = $request->to['address'];
                break;
            case '3':
                $form = $request->from['address'];
                $to = $request->to['address'];
                break;
            case '4':
                $form = $request->from['address'];
                $to = $request->to['address'];
                break;
            default:
                break;
        }

        $data->from = $form;
        $data->to = $to;

        if ($request->service_id == 1 || $request->service_id == 2 || $request->service_id == 3 || $request->service_id == 4) {
            if ($request->stopAddress) {
                $data->to_stop = serialize($request->stopAddress);
            }
        }

        // if ($request->service_id == 4) {
        //     if ($request->waitAddress) {
        //         $data->to_stop = serialize($request->waitAddress);
        //     }
        // }
    }

    public function tempsaveVehicleDetail($data, $request)
    {
        $vehicleDetail = [
            'forward_car_seat' => $request->vehicle_detail['forward_car_seat'],
            'rear_car_seat' => $request->vehicle_detail['rear_car_seat'],
            'booster_car_seat' => $request->vehicle_detail['booster_car_seat'],
        ];

        $data->vehicle_detail = serialize($vehicleDetail);
    }

    public function tempsaveReservationDetail($request, $id)
    {
        $details = new TempReservationDetail();
        $details->reservation_id = $id;
        $details->price = $request->payment['price'];
        $details->gratuity = $request->payment['gratuity'];
        $details->rush_hour_charge = $request->payment['rushHourCharge'];
        $details->per_mile_charge = $request->payment['perMileCharge'];
        $details->hours_charge = $request->payment['hoursCharge'];
        $details->car_seat = $request->payment['carSeat'];
        $details->booster_seat = $request->payment['boosterCarSeat'];
        $details->meet_greet = $request->payment['meetAndGreet'];
        $details->save();
    }

    public function tempsavePayment($request, $id)
    {
        $payment = new TempPayment();
        $payment->reservation_id = $id;
        $payment->amount = $request->payment['price'];
        $payment->currency = 'USD';
        $payment->save();
    }

    // End Temporary Data





    public function savePayment($request, $id)
    {
        $reservationId = $request->id;

        // Use the first() method to get the first matching TempPayment instance.
        $tempPayment = TempPayment::where('reservation_id', $reservationId)->first();

        if ($tempPayment) {
            // Create a new instance of Payment
            $payment = new Payment();

            // Set the attributes from the retrieved TempPayment instance
            $payment->reservation_id = $id;
            $payment->amount = $tempPayment->amount;
            $payment->status = $tempPayment->status;
            $payment->currency = 'USD';

            // Save the $payment instance to the database or perform other operations.
            $payment->save();
        } else {
            // Handle the case when the TempPayment is not found.
            dd("TempPayment not found");
        }
    }

    public function sendCustomerReservationEmail($data, $request)
    {
        $mainpassenger = MainPassenger::where('reservation_id', $data->id)->first();
        if ($data->to_stop) {
            $waypoints = unserialize($data->to_stop);
        } else {
            $waypoints = false;
        }

        if ($data->detail->rush_hour_charge) {
            $subTotal = $data->detail->rush_hour_charge + $data->detail->gratuity;
        }

        if ($data->detail->per_mile_charge) {
            $subTotal = $data->detail->per_mile_charge + $data->detail->gratuity;
        }

        if ($data->detail->hours_charge) {
            $subTotal = $data->detail->hours_charge;
        }

        $mailData = [
            'no' => $data->code,
            'vehicle' => $data->vehicle->name,
            'rear_car_seat' => unserialize($data->vehicle_detail)['rear_car_seat'],
            'vehicle_rush_hour_charge' => $data->vehicle->rush_hour_charge,
            'vehicle_per_mile_charge' => $data->vehicle->per_mile_charge,
            'vehicle_hourly_charge' => $data->vehicle->hourly_charge,
            'contact_name' => $data->bookingContact ? $data->bookingContact->name : $data->mainPassenger->name,
            'contact_email' => $data->bookingContact ? $data->bookingContact->email : $data->mainPassenger->email,
            'contact_phone' => $data->bookingContact ? $data->bookingContact->phone : $data->mainPassenger->phone,
            'service' => $data->service->name,
            'from' => $data->from,
            'to' => $data->to,
            'waypoints' => $waypoints,
            'date' => $data->date,
            'time' => $data->time,
            'miles' => $data->miles,
            'passengers' => $data->passengers,
            'bags' => $data->bags,
            'hours' => $data->hours,
            'price' => format_price($data->detail->price),
            'gratuity' => $data->detail->gratuity,
            'rush_hour_charge' => $data->detail->rush_hour_charge,
            'per_mile_charge' => $data->detail->per_mile_charge,
            'hours_charge' => $data->detail->hours_charge,
            'meet_greet' => $data->detail->meet_greet,
            'car_seat' => $data->detail->car_seat,
            'booster_seat' => $data->detail->booster_seat,
            // 'sub_total' => format_price($subTotal),
            'sub_total' => format_price($data->detail->price),
            'url' => env('APP_URL'),
        ];

        if ($request->add_booking_contact) {
            Mail::to($request->booking_contact['email'])
                ->bcc('spotlimo5@gmail.com')
                ->send(new CustomerReservation($mailData));
        } else {
            Mail::to($mainpassenger->email)
                ->bcc('spotlimo5@gmail.com')
                ->send(new CustomerReservation($mailData));
        }
    }

    public function calculatePrice($request)
    {
        $vehicleDetail = VehicleType::find($request->vehicleId);
        $vehicleId = $request->vehicleId;

        if ($vehicleDetail && $request->serviceType && $request->miles && $request->date && $request->time) {
            // calculate hourly price

            $perMileCharge = null;
            $rushHourCharge = null;
            $carSeat = null;
            $boosterCarSeat = null;
            $meetAndGreet = null;
            $hoursCharge = null;
            $miles = null;
            $gratuity = null;

            if ($request->hours && $request->serviceType == 4) {
                if ($request->hours == 2) {
                    $hoursCharge = $vehicleDetail->hourly_charge * 2; // minimum 2 hours
                    $price = $hoursCharge;
                } else {
                    $hoursCharge = $vehicleDetail->hourly_charge * $request->hours;
                    $price = $hoursCharge;
                }
            } else {
                // rush hours time check & per mile charge

                $day = Carbon::parse($request->date)->format('l');
                $hour = date_parse($request->time)['hour'];

                if ($day == 'Monday' || $day == 'Tuesday' || $day == 'Wednesday' || $day == 'Thursday') {
                    // 6-9 am - 3-7 Mon- Friday
                    if (($hour >= 6 && $hour < 9) || ($hour >= 15 && $hour < 19)) {
                        $price = $this->rushHourCharge($request->miles, $vehicleDetail)['price'];
                        $gratuity = $this->rushHourCharge($request->miles, $vehicleDetail)['gratuity'];
                        $rushHourCharge = $this->rushHourCharge($request->miles, $vehicleDetail)['rushHourCharge'];
                    } else {
                        $price = $this->pricePerMile($request->miles, $vehicleDetail)['price'];
                        $gratuity = $this->pricePerMile($request->miles, $vehicleDetail)['gratuity'];
                        $perMileCharge = $this->pricePerMile($request->miles, $vehicleDetail)['perMileCharge'];
                    }
                }

                if ($day == 'Friday') {
                    // Friday 4pm - 8 pm / 10 pm-2am
                    if (($hour >= 16 && $hour < 20) || ($hour >= 22 && $hour < 24)) {
                        $price = $this->rushHourCharge($request->miles, $vehicleDetail)['price'];
                        $gratuity = $this->rushHourCharge($request->miles, $vehicleDetail)['gratuity'];
                        $rushHourCharge = $this->rushHourCharge($request->miles, $vehicleDetail)['rushHourCharge'];
                    } else {
                        $price = $this->pricePerMile($request->miles, $vehicleDetail)['price'];
                        $gratuity = $this->pricePerMile($request->miles, $vehicleDetail)['gratuity'];
                        $perMileCharge = $this->pricePerMile($request->miles, $vehicleDetail)['perMileCharge'];
                    }
                }

                if ($day == 'Saturday') {
                    // 12am -2am / 4pm - 8 pm / 10 pm - 2am
                    if (($hour >= 0 && $hour < 2) || ($hour >= 16 && $hour < 20) || ($hour >= 22 && $hour < 24)) {
                        $price = $this->rushHourCharge($request->miles, $vehicleDetail)['price'];
                        $gratuity = $this->rushHourCharge($request->miles, $vehicleDetail)['gratuity'];
                        $rushHourCharge = $this->rushHourCharge($request->miles, $vehicleDetail)['rushHourCharge'];
                    } else {
                        $price = $this->pricePerMile($request->miles, $vehicleDetail)['price'];
                        $gratuity = $this->pricePerMile($request->miles, $vehicleDetail)['gratuity'];
                        $perMileCharge = $this->pricePerMile($request->miles, $vehicleDetail)['perMileCharge'];
                    }
                }

                if ($day == 'Sunday') {
                    // Sunday rush hour 12am -2am / 4 am-7am
                    if (($hour >= 0 && $hour < 2) || ($hour >= 4 && $hour < 7)) {
                        $price = $this->rushHourCharge($request->miles, $vehicleDetail)['price'];
                        $gratuity = $this->rushHourCharge($request->miles, $vehicleDetail)['gratuity'];
                        $rushHourCharge = $this->rushHourCharge($request->miles, $vehicleDetail)['rushHourCharge'];
                    } else {
                        $price = $this->pricePerMile($request->miles, $vehicleDetail)['price'];
                        $gratuity = $this->pricePerMile($request->miles, $vehicleDetail)['gratuity'];
                        $perMileCharge = $this->pricePerMile($request->miles, $vehicleDetail)['perMileCharge'];
                    }
                }
            }

            // calculate car seat price
            if ($request->rearCarSeat > 0) {
                $carSeat = $request->rearCarSeat * 20;
                $price = $price + $carSeat;
            }

            // booster car seat price
            if ($request->boosterCarSeat > 0) {
                $boosterCarSeat = 10;
                $price = $price + $boosterCarSeat;
            }

            // meet & greet price
            if ($request->meetAndGreet == 'true') {
                $meetAndGreet = 30;
                $price = $price + $meetAndGreet;
            }

            if ($rushHourCharge) {
                $subTotal = $rushHourCharge + $gratuity;
            }
            if ($perMileCharge) {
                $subTotal = $perMileCharge + $gratuity;
            }
            if ($hoursCharge) {
                $subTotal = $hoursCharge;
            }

            // $encryptedPrice = Crypt::encryptString(round($price, 2));


            // return response()->json(['success' => [
            //     'price' => round($price, 2),
            //     'gratuity' => round($gratuity, 2),
            //     'subTotal' => round($subTotal, 2),
            //     'rushHourCharge' => round($rushHourCharge, 2),
            //     'perMileCharge' => round($perMileCharge, 2),
            //     'hoursCharge' => $hoursCharge,
            //     'carSeat' => $carSeat,
            //     'boosterCarSeat' => $boosterCarSeat,
            //     'meetAndGreet' => $meetAndGreet,
                // 'miles' => $request->miles,

            // ]]);
            $responseData = [
                'price' => round($price, 2),
                // 'perMileCharge' => round($perMileCharge, 2),
                'miles' => $request->miles,


                // 'gratuity' => round($gratuity, 2), // Commented out to hide from response
                // ... (other values you want to include)
            ];
            return response()->json(['success' => $responseData]);
        }

        return response()->json(['error' => 'Directions request failed due to fail to invalid data']);
    }

    public function pricePerMile($miles, $vehicleDetail)
    {
        $gratuity = 0;

        if ($miles > 15) {
            //                          16.5 - 15 = 1.5 x  2.75 
            $after_15_miles_charge = ($miles - 15) * $vehicleDetail->after_15_miles;
            //                                5.5 x 15= 82.5         +  4.125   = 86.625           
            $perMileCharge = ($vehicleDetail->first_15_miles * 15) + $after_15_miles_charge;

            //  86.625 x 0.15 = 12.99        total  99.74    
            $gratuity = $perMileCharge * 0.15;
            $tax =  $perMileCharge *  ($vehicleDetail->tax / 100);
        } elseif ($miles > 10 && $miles < 15) {

            $perMileCharge =  ($vehicleDetail->per_mile_charge) * $miles;
            $gratuity = $perMileCharge * 0.15;
            $tax =  $perMileCharge *  ($vehicleDetail->tax / 100);
        } elseif ($miles <= 10) {
            $perMileCharge = $vehicleDetail->miles_under_10;
            $gratuity = $perMileCharge * 0.15;
            $tax =  $perMileCharge *  ($vehicleDetail->tax / 100);
        } else {
            $perMileCharge = 0;
        }

        $price = $perMileCharge + $gratuity + $tax;

        return [
            'perMileCharge' => $perMileCharge,
            'gratuity' => $gratuity,
            'price' => $price,
        ];
    }

    // public function pricePerMile($miles, $perMile)
    // {
    //     $perMileCharge = $miles * $perMile;
    //     $gratuity = $perMileCharge / 100 * 15;

    //     $price = $perMileCharge + $gratuity;

    //     return [
    //         'perMileCharge' => $perMileCharge,
    //         'gratuity' => $gratuity,
    //         'price' => $price,
    //     ];
    // }

    public function rushHourCharge($miles, $vehicleDetail)
    {
        $gratuity = 0;

        if ($miles > 15) {
            $after_15_miles_charge = ($miles - 15) * ($vehicleDetail->after_15_miles + 1);
            $rushHourCharge = (($vehicleDetail->first_15_miles + 1) * 15) + $after_15_miles_charge;
            $gratuity = $rushHourCharge * 0.15;
            $tax =  $rushHourCharge *  ($vehicleDetail->tax / 100);
        } elseif ($miles <= 10) {
            $rushHourCharge = $vehicleDetail->miles_under_10 + $vehicleDetail->rush_hour_charge;
            $gratuity = $rushHourCharge * 0.15;
        } else {
            $rushHourCharge = 0;
        }

        $price = $rushHourCharge + $gratuity;
        return [
            'rushHourCharge' => $rushHourCharge,
            'gratuity' => $gratuity,
            'price' => $price,
        ];
    }
}
