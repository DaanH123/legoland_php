<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order tickets - Legoland</title>
</head>

<body>
    @include('header')


    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Persoonlijke gegevens</p>
                            <p>Vul alle velden in!</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                                <div class="md:col-span-5">
                                    <label for="full_name">Ticket</label><br>
                                    <select name="ticket_type" class="h-10 border mt-1 rounded px-4 bg-gray-50">
                                        @foreach($tickets as $ticket)
                                        <option value="{{ $ticket->id }}">{{ $ticket->ticket_title }} - {{ $ticket->ticket_price }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="full_name">Aantal</label><br>
                                    <input type="number" name="aantal" id="aantal" class="h-10 border mt-1 rounded px-4 bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="full_name">Voornaam</label>
                                    <input type="text" name="voornaam" id="voornaam" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="full_name">Achternaam</label>
                                    <input type="text" name="achternaam" id="achternaam" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="address">Straat</label>
                                    <input type="text" name="straat" id="straat" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="address">Huisnummer</label>
                                    <input type="number" name="huisnummer" id="huisnummer" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="city">Stad</label>
                                    <input type="text" name="stad" id="stad" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="country">Land</label>
                                    <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                        <input name="land" id="land" placeholder="Land" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="state">Provincie</label>
                                    <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                        <input name="provincie" id="provincie" placeholder="Provincie" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                    </div>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="zipcode">Postcode</label>
                                    <input type="text" name="postcode" id="postcode" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" value="" />
                                </div>

                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Betalen</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')
</body>

</html>