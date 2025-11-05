<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - DhanXpert</title>
    <link rel="icon" type="image/png" href="{{ asset('images/dhanexpert.PNG') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')

    {{-- CONTACT TITLE --}}
    <section class="text-center py-16">
        <h1 class="text-4xl font-bold">Contact Us</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mt-3">
            Have a question, facing an issue, or need help? We’re here for you!
            Just fill out the form below, and our support team will get back to you shortly.
        </p>
    </section>

    {{-- INFO CARDS --}}
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 px-6">

        <div class=" rounded-xl p-8 text-center shadow-lg">
            <div class="text-4xl mb-4">🏠</div>
            <h3 class=" text-gray-700 text-xl font-semibold mb-2">Visit Us</h3>
            <p class="text-gray-700 text-sm">Mumbai, Maharashtra<br></p>
        </div>

        <div class=" rounded-xl p-8 text-center shadow-lg">
            <div class="text-4xl mb-4">📞</div>
            <h3 class="text-xl font-semibold mb-2">Call Us</h3>
            <p class="text-gray-700 text-sm">+91 7021471832</p>
        </div>

        <div class="rounded-xl p-8 text-center shadow-lg">
            <div class="text-4xl mb-4">✉️</div>
            <h3 class="text-xl font-semibold mb-2">Contact Us</h3>
            <p class="text-gray-400 text-sm">dhanxpertsolutions@gmail.com</p>
        </div>

    </div>

    {{-- FORM SECTION --}}
    <section class="max-w-4xl mx-auto  mt-16 p-12 rounded-xl shadow-xl">
        <h2 class="text-2xl font-bold text-center">Get In Touch</h2>
        <p class="text-gray-400 text-center mb-8 text-sm">And our team will connect with you as soon as possible</p>

        <form action="{{ route('contact.send') }}" method="POST" class="grid gap-5">
            @csrf

            <input type="text" placeholder="Name" name="name"
                class=" border border-gray-600 p-3 rounded focus:outline-none">
            <input type="email" placeholder="Email" name="email"
                class=" border border-gray-600 p-3 rounded focus:outline-none">
            <input type="text" name="phone" placeholder="Mobile Number" maxlength="10"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                class="border border-gray-600 p-3 rounded focus:outline-none">
            <textarea rows="4" placeholder="Write Comments" name="message"
                class=" border border-gray-600 p-3 rounded focus:outline-none"></textarea>
            @if (session('success'))
            <div
                class="mb-5 p-4 rounded-lg bg-green-100 text-green-800 font-medium border border-green-300 animate-fade-in">
                {{ session('success') }}
            </div>
            @endif
            <button
                class="px-8 py-3 bg-gray-500 text-white font-semibold rounded-xl shadow hover:bg-gray-700 transition">
                Submit
            </button>
        </form>
    </section>

    {{-- DOWNLOAD APP --}}
    {{-- <section class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 px-6 py-20">

        <div>
            <h2 class="text-4xl font-bold leading-tight">Download the<br>
                <span class="text-yellow-400">DhanXpert</span> App
            </h2>

            <p class="text-gray-300 mt-4">
                Search, connect, and consult with certified financial Xperts all in one app.
            </p>
        </div>

        <div class="flex gap-6">

            <div class="border border-gray-700 rounded-xl p-6 text-center">
                <p class="text-sm mb-3">Investor<br>App Download</p>
                <div class="bg-white w-28 h-28 mx-auto mb-4"></div>
                <img src="https://img.icons8.com/?size=100&id=17836&format=png" class="h-6 mx-auto mb-2" />
                <img src="https://img.icons8.com/?size=100&id=31014&format=png" class="h-6 mx-auto" />
            </div>

            <div class="border border-gray-700 rounded-xl p-6 text-center">
                <p class="text-sm mb-3">Xpert<br>App Download</p>
                <div class="bg-white w-28 h-28 mx-auto mb-4"></div>
                <img src="https://img.icons8.com/?size=100&id=17836&format=png" class="h-6 mx-auto mb-2" />
                <img src="https://img.icons8.com/?size=100&id=31014&format=png" class="h-6 mx-auto" />
            </div>

        </div>

    </section> --}}

    {{-- FOOTER --}}
    @include('layouts.footer')

</body>

</html>