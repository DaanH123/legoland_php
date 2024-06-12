<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order accommodatie - Legoland</title>
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
                            <!-- Form to order accommodaties -->
                            <form action="{{ url('orderaccommodatie') }}" method="post" class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                @csrf
                                <div class="md:col-span-5">
                                    <label for="full_name">Accommodatie</label><br>
                                    <select name="accommodatie_id" class="h-10 border mt-1 rounded px-4 bg-gray-50" required>
                                        <option value="">Kies een accommodatie</option>
                                        @foreach($accommodaties as $accommodatie)
                                        @if($selectedAccommodatieId == $accommodatie->id)
                                        <option value="{{ $accommodatie->id }}" selected>
                                            {{ $accommodatie->name }} - {{ $accommodatie->price }}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="full_name">Voornaam</label>
                                    <input type="text" name="voornaam" id="voornaam" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="full_name">Achternaam</label>
                                    <input type="text" name="achternaam" id="achternaam" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" required />
                                </div>

                                <div class="md:col-span-5">
                                    <input type="text" id="datePicker" name="dates" placeholder="Select Dates" readonly>
                                </div>

                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Betalen</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    @include('footer')
</body>

<script>
    // Array of unavailable dates
    let roomId = document.querySelector('select[name="accommodatie_id"]').value;
    console.log(roomId);

    document.addEventListener("DOMContentLoaded", function() {
        $.get('/unavailable-dates/' + roomId, function(data) {
            flatpickr("#datePicker", {
                mode: "range",
                dateFormat: "Y-m-d",
                disable: data,
                minDate: "today"
            });
        });
    });
</script>

</html>