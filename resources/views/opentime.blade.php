<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Openingstijden - Legoland</title>
</head>

<body>
    @include('header')
    <div class="flex flex-col justify-center overflow-x-auto shadow-md sm:rounded-lg my-16 w-1/3 mx-auto">
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
                </tr>
            </thead>
            <tbody>
                <!-- Alle openingstijden van Legoland vanuit de database -->
                @foreach($opentime as $opentimes)
                <tr class="bg-white border dark:border-yellow-400">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $opentimes->day }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $opentimes->open_time }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $opentimes->close_time }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    @include('footer')
</body>

</html>