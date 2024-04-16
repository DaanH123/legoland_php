<script src="https://cdn.tailwindcss.com"></script>
<script src="{{ mix('js/app.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<header class="block md:flex justify-evenly items-center bg-yellow-400 p-4 w-[100%]">
    <div class="flex justify-around items-center w-full md:w-auto">
        <div class="w-28">
            <a href="{{ route('home') }}">
                <img src="{{asset('LEGOLAND_PARKS_LOGO.svg')}}" alt="">
            </a>
        </div>
        <div class="md:hidden">
            <button id="hamburger-button" class="text-white">&#9776;</button>
        </div>
    </div>
    <div id="menu" class="hidden md:block pt-4 md:pt-0 flex flex-col md:space-x-3 md:flex-row md:justify-evenly text-center text-white w-full md:w-auto">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('attractions') }}">Attracties</a>
        <a href="{{ route('accomodaties') }}">Accommodaties</a>
        <a href="{{ route('tickets') }}">Tickets</a>
        <a href="{{ route('opentime') }}">Openingstijden</a>
        <a href="{{ route('contact') }}">Contact</a>

        @if (Auth::check())
            <form action="{{ route('logout') }}" method="post" class="md:hidden">
                @csrf
                <button type="submit" class="text-white">Logout</button>
            </form>
        @endif
    </div>
    @if (Auth::check())
        <form action="{{ route('logout') }}" method="post" class="hidden md:block items-center">
            @csrf
            <button type="submit" class="text-white">Logout</button>
        </form>
    @endif
</header>