<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $university }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .notice-container {
            background-color: white;
            padding: 30px;
            max-width: 700px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 22px;
        }
        .header p {
            margin: 5px 0;
            font-size: 14px;
        }
        .notice-title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            text-decoration: underline;
        }
        .date {
            text-align: right;
            font-size: 14px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
        }
        .signature {
            margin-top: 50px;
            text-align: center;
        }
        .signature img {
            width: 150px;
        }
        .signature p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="notice-container">
    <div class="header">
        <h1>{{ $university }}</h1>
        <p>{{ $address }}</p>
        <h4>{{ $department }}</h4>

    </div>
@foreach ($notices as $notice)
    <div class="notice-title">
        <h2  class="text-danger text-center mt-2">{{ $notice->title }}</h2>
    </div>

    <div class="date">
        <p class=" badge text-dark text-right">{{ ($date) }}</p>
    </div>

    <div class="content">
        <p class="mt-2 p-3">{{ $notice->content }}</p>
    </div>
    @endforeach
    <div class="signature">
        {{-- <p>{{ $name }}</p>
        <p>{{ $position }}</p>
        <p>{{ $university }} </p> --}}
        <p>(Ms. Nusrat Jahan)</p>
        <p>Head of ITM department</p>
        <p>Daffodil International University (DIU)</p>

    </div>
</div>

</body>
</html>


