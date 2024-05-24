<footer class="shadow bg-yellow-400">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{asset('LEGOLAND_PARKS_LOGO.svg')}}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Legoland Doetinchem</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 text-white">
                <li>
                    <a href="{{ route('attractions') }}" class="hover:underline me-4 md:me-6">Attracties</a>
                </li>
                <li>
                    <a href="{{ route('tickets') }}" class="hover:underline me-4 md:me-6">Tickets</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="hover:underline me-4 md:me-6">Contact</a>
                </li>
                <li>
                    <a href="{{ route('opentime') }}" class="hover:underline">Openingstijden</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center text-white">© <?= date('Y') ?> <a href="#" class="hover:underline">Legoland Doetinchem</a>. All Rights Reserved.</span>
    </div>
</footer>