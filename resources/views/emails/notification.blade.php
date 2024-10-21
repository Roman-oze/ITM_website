{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}


<!DOCTYPE html>
<html>
<head>
    <title>{{ $details['subject'] }}</title>
</head>
<body>
    <h1>{{ $details['subject'] }}</h1>
    <p>{{ $details['message'] }}</p>
</body>
</html>
