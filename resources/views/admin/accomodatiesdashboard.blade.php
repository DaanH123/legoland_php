@include('header')

<div class="flex flex-col justify-center items-center gap-3">
    <a href="{{ route('dashboard') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Back to dashboard</a>
    <a id="addAttraction" class="bg-green-800 text-white px-2 py-2 rounded-2xl hover:cursor-pointer">Nieuwe attractie</a>
</div>

<div id="addAttractionForm" class="hidden">
<div class="flex justify-center items-center">
    <div class="flex flex-col justify-center gap-4">
        <div class="w-80 my-3 md:my-6 rounded-xl">
            <form method="POST" action="{{ route('accomodaties.store') }}">
                @csrf
                <h3 class="font-bold">Image binnen url</h3>
                <input type="text" name="image_inside" value="" class="px-4 py-2 w-full border rounded-md">
                <h3 class="font-bold">Image buiten url</h3>
                <input type="text" name="image_outside" value="" class="px-4 py-2 w-full border rounded-md">
                <h3 class="font-bold">Naam</h3>
                <input type="text" name="name" value="" class="font-bold text-2xl px-4 py-2 w-full border rounded-md">
                <h3 class="font-bold">Beschrijving</h3>
                <textarea name="description" class="px-4 py-2 w-full h-32 resize-none border rounded-md"></textarea>
                <h3 class="font-bold">Prijs</h3>
                <input type="text" name="price" value="" class="px-4 py-2 w-full border rounded-md"><br>
                <h3>Maximale personen</h3>
                <input type="text" name="max_persons" value="" class="px-4 py-2 w-full border rounded-md"><br>
                
                <input type="submit" value="Opslaan" class="bg-green-800 text-white px-2 py-2 rounded-md hover:cursor-pointer mt-4">
            </form>
        </div>
    </div>
</div>
</div>


<div class="flex justify-center items-center">
    <div class="flex flex-col justify-center md:grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($accomodaties as $accomodatie)
        <div class="border border-gray-100 w-80 my-3 md:my-6 shadow-md rounded-xl">
            <form method="POST" action="{{ route('accomodaties.update', $accomodatie->id) }}">
                @csrf
                @method('PUT')
                <img class="w-80 rounded-t-xl brightness-50 min-h-[238px]" src="{{ $accomodatie->image_inside }}" alt="Legoland Doetinchem {{ $accomodatie->name }}">
                <img class="w-80 rounded-t-xl brightness-50 min-h-[238px]" src="{{ $accomodatie->image_outside }}" alt="Legoland Doetinchem {{ $accomodatie->name }}">
                <h3 class="font-bold">ID</h3>
                <input type="text" name="id" value="{{ $accomodatie->id }}" class="px-4 py-2 w-full border rounded-md" readonly>
                <h3 class="font-bold">Image binnen url</h3>
                <input type="text" name="image_inside" value="{{ $accomodatie->image_inside }}" class="px-4 py-2 w-full border rounded-md">
                <h3 class="font-bold">Image buiten url</h3>
                <input type="text" name="image_outside" value="{{ $accomodatie->image_outside }}" class="px-4 py-2 w-full border rounded-md">
                <h3 class="font-bold">Naam</h3>
                <input type="text" name="name" value="{{ $accomodatie->name }}" class="font-bold text-2xl px-4 py-2 w-full border rounded-md">
                <h3 class="font-bold">Beschrijving</h3>
                <textarea name="description" class="px-4 py-2 w-full h-32 resize-none border rounded-md">{{ $accomodatie->description }}</textarea>
                <h3 class="font-bold">Prijs</h3>
                <input type="text" name="price" value="{{ $accomodatie->price }}" class="px-4 py-2 w-full border rounded-md"><br>
                <h3>Maximale personen</h3>
                <input type="text" name="max_persons" value="{{ $accomodatie->max_persons }}" class="px-4 py-2 w-full border rounded-md"><br>

                <div class="flex gap-5 justify-center items-center">
                    <button type="submit" class="bg-green-400 text-white px-4 py-2 rounded-md hover:bg-green-500">Save</button>
            </form>
            <form action="{{ route('accomodaties.destroy', $accomodatie->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-400 mt-4 text-white px-4 py-2 rounded-md hover:bg-red-500">Verwijderen</button>
        </div>
        </form>
    </div>
    @endforeach
</div>