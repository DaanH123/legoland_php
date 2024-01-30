<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Legoland</title>
</head>

<body>
    @include('header')
    <div class="flex justify-center items-center w-[90%] md:w-2/3 my-12 mx-auto rounded-2xl shadow-md">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <div class="relative overflow-hidden h-64 md:h-96 rounded-lg">
                @foreach ($attractions as $attraction)
                <div class="hidden duration-700 ease-in-out relative h-full" data-carousel-item>
                    <img src="{{ $attraction->image }}" class="absolute w-full h-full object-cover brightness-50" alt="...">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                        <h1 class="text-white text-2xl font-bold">Welkom bij Legoland Doetinchem</h1>
                        <p class="text-white pb-3">Het park voor iedereen met de beste Attracties</p>
                        <a href="{{ route('attractions') }}" class="mt-6 px-4 py-2 bg-yellow-400 text-white rounded">Bekijk Attracties</a>
                    </div>
                </div>
                @endforeach
            </div>
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    @include('tickets')

    @include('footer')
</body>

</html>