<x-mail::message>
# Your Reservation No.{{$mailData['no']}} is Confirmed

Your reservation has been received and is now being processed.Our team will contact you.

<x-mail::panel>
{{$mailData['contact_name']}}<br>
{{$mailData['contact_email']}}<br>
{{$mailData['contact_phone']}}<br>

Pick-up Date : {{$mailData['date']}}<br>
Pick-up Time : {{$mailData['time']}}<br>
Service Type : {{$mailData['service']}}<br>
Vehicle Type : {{$mailData['vehicle']}}<br>
</x-mail::panel>

<x-mail::table>
|                                                                                                                            |
| --------------------------------------------------------------------------------------------------------------------------:|
|<div class="waypoints"><div class="way-heading">From</div><div class="way-data">{{$mailData['from']}}</div> </div>          |
@if ($mailData['waypoints'])
@foreach ($mailData['waypoints'] as $key => $wayPoint)
|<div class="waypoints"><div class="way-heading">Waypoints {{$key+1}}</div><div class="way-data">{{$wayPoint}} </div> </div> |
@endforeach
@endif
|<div class="waypoints"><div class="way-heading">To</div>        <div class="way-data">  {{$mailData['to']}}</div> </div>    |
</x-mail::table>


<x-mail::table>
|               |                                                                             |                                             |
| ------------- |:---------------------------------------------------------------------------:| -------------------------------------------:|
| Subtotal      |                                                                             | {{$mailData['sub_total']}}                  |
@if ($mailData['car_seat'])
| Car Seat      |     {{$mailData['rear_car_seat']}} x $20                                    | {{format_price($mailData['car_seat'])}}     |
@endif
@if ($mailData['booster_seat'])
| Booster Seat  |                                                                             | {{format_price($mailData['booster_seat'])}} |
@endif
@if ($mailData['meet_greet'])
| Meet & Greet  |                                                                             | {{format_price($mailData['meet_greet'])}}   |
@endif
| Total         |                                                                             | **{{$mailData['price']}}**                  |
</x-mail::table>


<x-mail::button :url="$mailData['url']">
View Reservation
</x-mail::button>

Terms & Conditions
* Full refund if canceled more than 2 hours prior to scheduled pickup<br>
* No refund if canceled 2 hours prior to scheduled pickup<br>

Thank you for your reservation and we hope we’ll be seeing you again.<br>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
