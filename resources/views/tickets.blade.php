<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets - Legoland</title>
</head>

<body>
    @if(Route::currentRouteNamed('tickets'))
    @include('header')
    @endif

    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-yellow-400">Ticket prijzen Legoland Doetinchem.</h2>
            <p class="mb-5 font-light  sm:text-xl">Hier zijn de ticket prijzen voor Legoland Doetinchem te bekijken alle leeftijds categorieen.</p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
            @foreach($tickets as $ticket)
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow xl:p-8 bg-yellow-400 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">{{ $ticket->ticket_title }}</h3>
                <p class="font-light sm:text-lg">{{ $ticket->ticket_description }}</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">€ {{ $ticket->ticket_price }} *</span>
                </div>

                <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white">Bestellen</a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="mt-36"></div>
    @if(Route::currentRouteNamed('tickets'))
    @include('footer')
    @endif
</body>

</html>