@include('header')
    
<div class="flex justify-center items-center mt-24 flex-col">
    <h1 class="text-4xl font-bold">Dashboard</h1>
    <p>Kies een optie</p>
    <div class="space-x-6 flex">
        <a href="{{ route('users') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Users</a>
        <a href="{{ route('contactforms') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Contact</a>
        <a href="{{ route('ticketorders') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Ticketorders</a>
        <a href="{{ route('opentimes') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Opentimes</a>
        <a href="{{ route('attractionsdashboard') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Attractions</a>
    </div>
</div>