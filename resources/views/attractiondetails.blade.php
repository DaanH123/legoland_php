@include('header')

<div class="block flex justify-center md:justify-evenly items-center my-20 lg:text-start flex-col">
        <img src="{{ $attraction->image }}" alt="" class="w-[80%] lg:w-[35%]">
    <div class="mt-10 lg:text-start text-center">
        <h3 class="font-bold text-2xl">{{ $attraction->name }}</h3>
        <p class="mt-2 max-w-xl mx-auto px-4 lg:px-0">{{ $attraction->description }}</p>
        <ul class="mt-6">
            <li class="font-bold">Minimum leeftijd {{ $attraction->min_age }} jaar</li>
            <li class="font-bold">Minimum lengte {{ $attraction->min_length }} cm</li>
            <li class="font-bold">Attractie duur {{ $attraction->ride_time ? $attraction->ride_time . ' Seconden': 'Verschillend'}}</li>
        </ul>
    </div>
</div>

@include('footer')