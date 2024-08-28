<!DOCTYPE html>
<html lang="en">
<head>

    <title>Routine From Department-{{ $requeest['suject'] }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    <p>Hello Dear Students </p>
    <p>You have receive an academic semester routine from (ITM) department below Rotuine PDF</p>

    <p>{{ $request['name'] }}</p>
    <p>{{ $request['email'] }}</p>
    <p>{{ $request['subject'] }}</p>
    <p>{{ $request['message'] }}</p>

</body>
</html>
