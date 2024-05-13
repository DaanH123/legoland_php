@include("header")

<div class="flex justify-center itmems-center">
    <a href="{{ route('dashboard') }}" class="bg-yellow-400 text-white px-2 py-2 mt-10 rounded-2xl">Back to dashboard</a>
</div>

<div class="flex flex-col justify-center overflow-x-auto shadow-md sm:rounded-lg my-16 w-[90%] px-10 mx-auto">
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
                        Accommodatie ID
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Betaalmethode
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Aangemaakt op
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items center">
                        Acties
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderaccommodaties as $accommodatieorder)
            <tr class="bg-white border dark:border-yellow-400">
                <form method="POST" action="{{ route('orderaccommodaties.update', $accommodatieorder->id) }}">
                    @csrf
                    @method('PUT')
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        <input type="text" name="id" value="{{ $accommodatieorder->id }}" readonly>
                    </th>
                    <td class="px-6 py-4">
                        <input type="text" name="firstname" value="{{ $accommodatieorder->firstname }}">
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="lastname" value="{{ $accommodatieorder->lastname }}">
                    </td>
                    <td class="px-6 py-4">
                        <input type="email" name="email" value="{{ $accommodatieorder->email }}">
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="accommodatie_id" value="{{ $accommodatieorder->accommodatie_id }}">
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="paymentmethod" value="{{ $accommodatieorder->paymentmethod }}">
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="created_at" value="{{ $accommodatieorder->created_at }}" readonly>
                    </td>
                    <td class="px-6 py-4 flex gap-3">
                        <button type="submit" class="bg-green-400 text-white px-4 py-2 rounded-md hover:bg-green-500">Save</button>
                </form>
                <form action="{{ route('orderaccommodaties.destroy', $accommodatieorder->id) }}" method="POST">
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