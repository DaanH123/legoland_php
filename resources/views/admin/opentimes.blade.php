@include("header")

<div class="flex justify-center itmems-center">
    <a href="{{ route('dashboard') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Back to dashboard</a>
</div>

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