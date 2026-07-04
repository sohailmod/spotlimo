<?php

namespace App\Services;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentService
{
    public function getPayment($reservation)
    {
        $provider = new PayPalClient([]);
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);
        $amount = round(floatval($reservation->payment->amount), 2);
        $amountAsString = number_format($amount, 2, '.', '');
        $purchaseUnits = [
            [
                "amount" => [
                    "currency_code" => $reservation->payment->currency,
                    "value" => $amountAsString
                ],

            ]
        ];

        $order = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => $purchaseUnits,
            "application_context" => [
                "cancel_url" => route('payment.cancel'),
                "return_url" => route('payment.confirm')
            ]
        ]);

        return $order;
    }
}
