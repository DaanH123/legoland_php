@include("header")

<div class="flex justify-center itmems-center">
    <a href="{{ route('dashboard') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Back to dashboard</a>
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
@include("footer")