<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attracties - Legoland</title>
</head>

<body>
    @include('header')
    <!-- All attractions displayed from database -->
    <div class="flex justify-center items-center">
        <div class="flex flex-col justify-center md:grid md:grid-cols-3 gap-4">
            @foreach ($attractions as $attraction)
            <div class="border border-gray-100 w-80 my-3 md:my-6 shadow-md rounded-xl">
                <img class="w-80 rounded-t-xl brightness-50" src="{{ $attraction->image }}" alt="Legoland Doetinchem {{ $attraction->name }}">
                <p class="font-bold text-2xl px-4 py-2">{{ $attraction->name }}</p>
                <p class="px-4 py-2">{{ Str::words($attraction->description, 30, '...') }}</p>
                <p class="px-4 py-2"><i class="fa-solid fa-clock mr-2"></i> {{ $attraction->ride_time ? $attraction->ride_time . ' Seconden': 'Verschillend'}}</p>
            </div>
            @endforeach
        </div>
    </div>
    @include('footer')
</body>

</html>