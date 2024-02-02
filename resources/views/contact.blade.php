<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Legoland</title>
</head>

<body>
    @include('header')
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-center w-1/3 flex justify-center mx-auto text-green-700 px-4 py-3 my-3 rounded" role="alert">
        <strong class="font-bold pr-2">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    <section class="bg-white">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md shadow-lg my-10 border text-black rounded-2xl">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-black">Contact form</h2>
            <form action="{{ url('postContactForm') }}" method="post" class="space-y-8">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-black">Email adres</label>
                    <input type="email" id="email" class="shadow-sm  border text-black text-black text-sm rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5 text-black placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400 shadow-sm-light" placeholder="Email" required name="email">
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-black">Onderwerp</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-black rounded-lg border text-black shadow-sm focus:ring-yellow-400 focus:border-yellow-400 text-black placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400 shadow-sm-light" placeholder="Hoe kunnen wij je helpen?" required name="subject">
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-black">Je bericht</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-black rounded-lg shadow-sm border text-black focus:ring-yellow-400 focus:border-yellow-400 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-4000" placeholder="Je bericht" name="message"></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-black rounded-lg sm:w-fit focus:ring-4 focus:outline-none focus:ring-yellow-400 focus:ring-yellow-400 bg-yellow-400 text-white">Send message</button>
            </form>
        </div>
    </section>

    @include('footer')
</body>

</html>