<x-mail::message>
# Hi, {{$mailData['name']}}

Thank You for contacting us !

<x-mail::button :url="$mailData['url']">
Book Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
