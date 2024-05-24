@include('header')

<div class="flex justify-center items-center my-10">
    <div class="flex flex-col justify-center md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($accomodaties as $accomodatie)
        <div class="border border-gray-100 w-80 my-3 md:my-6 shadow-md rounded-xl" id="visitAccommodation">
            <div class="slideshow-container relative">
                <div class="mySlides fade">
                    <img class="w-80 max-h-[210px] rounded-t-xl brightness-50" src="{{ $accomodatie->image_inside }}" alt="Legoland Doetinchem {{ $accomodatie->name }}">
                </div>
                <div class="mySlides fade">
                    <img class="hidden w-80 max-h-[210px] rounded-t-xl brightness-50" src="{{ $accomodatie->image_outside }}" alt="Legoland Doetinchem {{ $accomodatie->name }}">
                </div>
            </div>
            <p class="font-bold text-xl px-4 py-2">{{ $accomodatie->name }}</p>
            <p class="px-4 py-2">{{ Str::words($accomodatie->description, 30, '...') }}</p>
            <p class="px-4 py-2"><i class="fa-solid fa-person mr-2"></i> {{ $accomodatie->max_persons }}</p>

            <form id="visitAccommodationForm" action="{{ route('accomodaties.show', $accomodatie->id) }}" class="m-0">
                <button class="bg-yellow-400 w-full py-2 rounded-b-xl">Meer informatie</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

@include('footer')