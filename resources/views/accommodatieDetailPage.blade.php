@include('header')

<div class="block lg:flex justify-center md:justify-evenly items-center my-20 lg:text-start">
    <div class="slideshow-container relative flex justify-center">
        <div class="mySlides fade">
            <img class="w-80 md:w-[500px] lg:w-[700px] max-h-[460px] rounded-2xl" src="{{ $accomodatie->image_inside }}" alt="Legoland Doetinchem {{ $accomodatie->name }}">
        </div>
        <div class="mySlides fade">
            <img class="w-80 md:w-[500px] lg:w-[700px] max-h-[460px] rounded-2xl" src="{{ $accomodatie->image_outside }}" alt="Legoland Doetinchem {{ $accomodatie->name }}">
        </div>

        <a class="prev absolute top-1/2 text-white left-0 transform -translate-y-1/2">&#10094;</a>
        <a class="next absolute top-1/2 text-white right-0 transform -translate-y-1/2">&#10095;</a>
    </div>
    <div class="mt-10 lg:text-start text-center">
        <h3 class="font-bold text-2xl">{{ $accomodatie->name }}</h3>
        <p class="mt-2 max-w-xl mx-auto px-4 lg:px-0">{{ $accomodatie->description }}</p>

        <ul class="mt-6">
            <li class="font-bold">Maximaal aantal personen: {{ $accomodatie->max_persons }}</li>
            <li class="font-bold">Prijs {{ $accomodatie->price }}</li>
        </ul>

        <form class="">
            <button class="bg-yellow-400 w-3/4 py-2 rounded-xl mt-6 text-white">Boeken</button>
        </form>
    </div>
</div>

@include('footer')
