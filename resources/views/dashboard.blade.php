@include('header')
<div class="flex">
    <div class="flex flex-col justify-center overflow-x-auto sm:rounded-lg my-16 w-1/2 mx-auto">
        <h1 class="text-center text-xl font-bold py-4">Opentijden tabel</h1>
        <table class="text-sm text-left rtl:text-right border border-yellow-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-yellow-400 text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Dag
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Openingstijd
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Sluitingsstijd
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Acties
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Alle openingstijden van Legoland vanuit de database -->
                @foreach($opentimes as $opentimee)
                <tr class="bg-white border dark:border-yellow-400">
                    <form method="POST" action="{{ route('opentimes.update', $opentimee->id) }}">
                        @csrf
                        @method('PUT')
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                            <input type="text" name="day" value="{{ $opentimee->day }}">
                        </th>
                        <td class="px-6 py-4">
                            <input type="text" name="open_time" value="{{ $opentimee->open_time }}">
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" name="close_time" value="{{ $opentimee->close_time }}">
                        </td>
                        <td class="px-6 py-4 flex gap-3">
                            <button type="submit" class="bg-green-400 text-white px-4 py-2 rounded-md hover:bg-green-500">Save</button>
                        </td>
                    </form>
                    <td>
                        <form action="{{ route('opentimes.destroy', $opentimee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-400 text-white px-4 py-2 rounded-md hover:bg-red-500">Verwijderen</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex flex-col justify-center overflow-x-auto sm:rounded-lg my-16 w-[40%] mx-auto">
        <h1 class="text-center text-xl font-bold py-4">Users tabel</h1>
        <table class="text-sm text-left rtl:text-right border border-yellow-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-yellow-400 text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Naam
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Email
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Acties
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="bg-white border dark:border-yellow-400">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $user->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4 flex gap-3">
                        <form action="" method="post">
                            <button type="submit" class="bg-yellow-400 text-white px-4 py-2 rounded-md hover:bg-yellow-500">Bewerken</button>
                        </form>
                        <form action="" method="post">
                            <button type="submit" class="bg-red-400 text-white px-4 py-2 rounded-md hover:bg-red-500">Verwijderen</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="flex flex-col justify-center overflow-x-auto shadow-md sm:rounded-lg my-16 w-2/3 mx-auto">
    <h1 class="text-center text-xl font-bold py-4">Contact verzoeken tabel</h1>
    <table class="text-sm text-left rtl:text-right border border-yellow-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-yellow-400 text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Email
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Onderwerp
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Bericht
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Verzonden op
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Acties
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <!-- Alle openingstijden van Legoland vanuit de database -->
            @foreach($contacts as $contact)
            <tr class="bg-white border dark:border-yellow-400">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                    {{ $contact->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $contact->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $contact->subject }}
                </td>
                <td class="px-6 py-4">
                    {{ $contact->message }}
                </td>
                <td class="px-6 py-4">
                    {{ $contact->created_at }}
                </td>
                <td class="px-6 py-4 flex gap-3">
                    <form action="" method="post">
                        <button type="submit" class="bg-yellow-400 text-white px-4 py-2 rounded-md hover:bg-yellow-500">Bewerken</button>
                    </form>
                    <form action="" method="post">
                        <button type="submit" class="bg-red-400 text-white px-4 py-2 rounded-md hover:bg-red-500">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="flex flex-col justify-center overflow-x-auto shadow-md sm:rounded-lg my-16 w-full px-10 mx-auto">
    <h1 class="text-center text-xl font-bold py-4">Ticket orders tabel</h1>
    <table class="text-sm text-left rtl:text-right border border-yellow-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-yellow-400 text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Voornaam
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Achternaam
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Email
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Tickettype
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Aantal tickets
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Betaalmethode
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Besteld op
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Acties
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <!-- Alle openingstijden van Legoland vanuit de database -->
            @foreach($ticketorders as $ticketorder)
            <tr class="bg-white border dark:border-yellow-400">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                    {{ $ticketorder->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $ticketorder->firstname }}
                </td>
                <td class="px-6 py-4">
                    {{ $ticketorder->lastname }}
                </td>
                <td class="px-6 py-4">
                    {{ $ticketorder->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $ticketorder->tickettype }}
                </td>
                <td class="px-6 py-4">
                    {{ $ticketorder->amount }}
                </td>
                <td class="px-6 py-4">
                    {{ $ticketorder->paymentmethod }}
                </td>
                <td class="px-6 py-4">
                    {{ $ticketorder->created_at }}
                </td>
                <td class="px-6 py-4 flex gap-3">
                    <form action="" method="post">
                        <button type="submit" class="bg-yellow-400 text-white px-4 py-2 rounded-md hover:bg-yellow-500">Bewerken</button>
                    </form>
                    <form action="" method="post">
                        <button type="submit" class="bg-red-400 text-white px-4 py-2 rounded-md hover:bg-red-500">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>