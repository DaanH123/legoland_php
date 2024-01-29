<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attracties - Legoland</title>
</head>

<body>
    @include('header')
    <div class="flex justify-center items-center min-h-screen">
    <div class="flex flex-col justify-center md:grid md:grid-cols-3 gap-4">
        @foreach ($attractions as $attraction)
        <div class="border border-gray-100 w-80 my-6 shadow-md rounded-xl">
            <img class="w-80 rounded-t-xl brightness-50" src="{{ $attraction->image }}" alt="Legoland Doetinchem {{ $attraction->name }}">
            <p class="font-bold text-2xl m-2">{{ $attraction->name }}</p>
            <p class="m-2">{{ Str::words($attraction->description, 15, '...') }}</p>
            <p><i class="fa-solid fa-clock m-2"></i> {{ $attraction->ride_time ? $attraction->ride_time . ' Seconden': 'Verschillend'}}</p>
        </div>
        @endforeach
    </div>
</div>
</body>

</html>