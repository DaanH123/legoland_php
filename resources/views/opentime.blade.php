<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Openingstijden - Legoland</title>
</head>
<body>
    @include('header')


    @foreach($opentime as $opentimes)
        <p>{{ $opentimes->day }} {{ $opentimes->open_time }} - {{ $opentimes->close_time }}</p>
    @endforeach

    @include('footer')
</body>
</html>