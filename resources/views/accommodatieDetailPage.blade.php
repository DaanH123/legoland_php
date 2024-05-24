@include('header')

<div class="block lg:flex justify-center md:justify-evenly items-center my-20 lg:text-start">
    <div class="relative mx-auto w-80 lg:mr-0 lg:ml-0 lg:w-[700px]" data-carousel="static">
        <div class="relative overflow-hidden h-64 md:h-96 rounded-lg">
            <div class="hidden duration-700 ease-in-out relative h-full" data-carousel-item>
                <img src="{{ $accomodatie->image_inside }}" class="absolute w-80 md:w-[500px] lg:w-[700px] max-h-[460px] rounded-2xl" alt="Legoland Doetinchem {{ $accomodatie->name }}">
                <img src="{{ $accomodatie->image_outside }}" class="absolute w-80 md:w-[500px] lg:w-[700px] max-h-[460px] rounded-2xl" alt="Legoland Doetinchem {{ $accomodatie->name }}">
            </div>
        </div>
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only prev">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only next">Next</span>
            </span>
        </button>
    </div>
    <div class="mt-10 lg:text-start text-center">
        <h3 class="font-bold text-2xl">{{ $accomodatie->name }}</h3>
        <p class="mt-2 max-w-xl mx-auto px-4 lg:px-0">{{ $accomodatie->description }}</p>

        <ul class="mt-6">
            <li class="font-bold">Maximaal aantal personen: {{ $accomodatie->max_persons }}</li>
            <li class="font-bold">Prijs {{ $accomodatie->price }}</li>
        </ul>
        <form class="" action="{{ route('orderaccommodatie') }}">
            <button class="bg-yellow-400 w-3/4 py-2 rounded-xl mt-6 text-white">Boeken</button>
        </form>
    </div>
</div>

@include('footer')
