<x-mail::message>
# Hi, {{$mailData['name']}}

{!!$mailData['message']!!}


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
