<script src="https://cdn.tailwindcss.com"></script>
<script src="{{ mix('js/app.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<div class="block md:flex justify-evenly items-center bg-yellow-400 p-4 w-[100%]">
        <div class="block md:flex md:justify-evenly text-center">
            <div class="flex align-center items-center">
                <div class="left-header w-28">
                    <img src="{{asset('LEGOLAND_PARKS_LOGO.svg')}}" alt="">
                </div>
                <div class="right-header-hamburger md:hidden">
                    <button id="hamburger-button" class="text-white">&#9776;</button>
                </div>
            </div>
            <div id="menu" class="right-header hidden pt-6 md:flex inline-grid text-white">
                <a href="">Home</a>
                <a href="">Over</a>
                <a href="">Attracties</a>
                <a href="">Tickets</a>
                <a href="">Contact</a>
            </div>
        </div>
</div>