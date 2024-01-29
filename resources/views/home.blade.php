<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Legoland</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container block md:flex justify-evenly items-center bg-yellow-400 p-4">
        <div class="block md:flex">
            <div class="flex justify-evenly align-center items-center">
                <div class="left-header w-28">
                    <img src="{{asset('LEGOLAND_PARKS_LOGO.svg')}}" alt="">
                </div>
                <div class="right-header-hamburger">
                    <button id="hamburger-button" class="text-white">&#9776;</button>
                </div>
            </div>
            <div class="right-header pt-6 md:flex block">
                <a href="">Home</a>
                <a href="">Over</a>
                <a href="">Attracties</a>
                <a href="">Tickets</a>
                <a href="">Contact</a>
            </div>
        </div>
    </div>
</body>

</html>