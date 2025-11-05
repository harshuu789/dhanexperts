<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - DhanXpert</title>
    <link rel="icon" type="image/png" href="{{ asset('images/dhanexpert.PNG') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">

    @include('layouts.navbar')

    <section class="text-center py-20 bg-white shadow-sm">
        <h1 class="text-5xl font-bold text-gray-900">About Us</h1>
        <p class="text-gray-600 max-w-3xl mx-auto mt-5 text-lg leading-relaxed">
            DhanXpert Solutions is a trusted financial firm dedicated to helping individuals and businesses make smarter
            investment decisions.
            We specialize in Indian stock market investments, IPO opportunities, short-term and long-term investment
            planning, and wealth management.
        </p>
    </section>

    <section class="max-w-6xl mx-auto py-24 px-6 relative">
        <div class="hidden md:block absolute left-1/2 top-0 bottom-0 border-l border-gray-300"></div>

        <div class="grid md:grid-cols-2 gap-14 items-center mb-28">
            <img src="https://m.media-amazon.com/images/I/81M99KXZApL._AC_UF1000%2C1000_QL80_.jpg"
                class="rounded-2xl shadow-lg transform hover:scale-[1.02] transition">
            <div class="md:pl-12">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    At DhanXpert Solutions, we believe that success begins with trust, knowledge, and consistency.
                    Our goal is to make investing simple, transparent, and rewarding for everyone — from beginners to
                    experienced investors.
                </p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-14 items-center">
            <div class="md:pr-12">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Vision</h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    To deliver smart, simple, and result-driven investment solutions that empower people to achieve
                    financial freedom and sustainable growth.”
                </p>
            </div>
            <img src="https://images.unsplash.com/photo-1542744095-291d1f67b221"
                class="rounded-2xl shadow-lg transform hover:scale-[1.02] transition">
        </div>
    </section>

    <section class="py-16 bg-gradient-to-r from-green-600 to-indigo-300 text-white text-center">
        <h3 class="text-3xl font-semibold mb-4">Looking for Professional Financial Guidance?</h3>
        <p class="text-white/90 max-w-2xl mx-auto mb-8 text-lg">
            Our advisory experts provide custom investment planning, risk management, and market insights.
            Begin your journey toward smarter and confident financial growth.
        </p>
        <a href="/contact"
            class="px-8 py-3 bg-white text-blue-500 font-semibold rounded-xl shadow hover:bg-gray-200 transition">
            Connect With Us
        </a>
    </section>

    @include('layouts.footer')

</body>

</html>