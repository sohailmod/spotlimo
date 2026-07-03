<x-mail::message>
# Dear {{$mailData['passenger_name']}}

Thanks for your payment of  {{$mailData['amount']}}

<x-mail::panel>
Payment Status : {{$mailData['status']}}<br>
Payment Method : {{$mailData['payment_channel']}}
</x-mail::panel>


For inquiries related to your reservation,
you may contact contact@spotlimo.com or +1 224 372 3723

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
