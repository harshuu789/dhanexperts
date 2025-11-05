<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhanXpert Solutions - Find And Book Certified Financial Xperts</title>
    <link rel="icon" type="image/png" href="{{ asset('images/dhanexpert.PNG') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, #008B8B 0%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .expert-card {
            transition: all 0.3s ease;
        }

        .expert-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navigation -->
    @include('layouts.navbar')


    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-50 to-purple-50 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 text-center leading-tight">
            Empowering Smarter Investments
            <br>
            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                For a Secure Financial Future
            </span>
        </h1>

        <div class="max-w-4xl mx-auto text-center mt-12">
            <h3 class="text-3xl font-semibold text-gray-900 mb-4">DhanXpert Solutions – Smart Investments, Secure Future. 💼</h3>

            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                At DhanXpert Solutions, financial success begins with knowledge, trust, and consistency. 
                We aim to simplify investing for every individual—whether you're just starting out or expanding your financial portfolio.
            </p>

            <p class="text-gray-800 font-medium text-lg">
                Our strategies are designed to help you grow your wealth, secure your future,
                and make confident investment decisions.
            </p>
        </div>

        <!-- Offer Section -->
        <div class="max-w-6xl mx-auto mt-20 bg-white/60 backdrop-blur-xl rounded-3xl p-12 shadow-xl transition hover:shadow-2xl">
            <h3 class="text-4xl font-bold text-gray-900 text-center mb-10">
                What We Offer
            </h3>

            <p class="text-gray-700 text-lg text-center max-w-3xl mx-auto mb-14 leading-relaxed">
                Whether you're a beginner or experienced investor, our advisory services are crafted 
                to guide you with clarity, confidence, and market-backed insights.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <!-- Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition transform text-center">
                    <div class="text-5xl mb-4">📈</div>
                    <h4 class="text-2xl font-semibold text-gray-900 mb-3">Stock Market Guidance</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Master market trends, risk control, and long-term wealth growth with expert-backed insights.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition transform text-center">
                    <div class="text-5xl mb-4">💰</div>
                    <h4 class="text-2xl font-semibold text-gray-900 mb-3">Wealth Management</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Customized financial planning focused on consistent growth and future stability.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition transform text-center">
                    <div class="text-5xl mb-4">🚀</div>
                    <h4 class="text-2xl font-semibold text-gray-900 mb-3">IPO & Opportunities</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Stay ahead with early access to IPO reviews, sector trends, and high-potential investment picks.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


    <!-- Browse Categories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">
                Browse Financial Xperts<br />
                <span class="gradient-text">by Categories & Area of Expertise.</span>
            </h2>
            <p class="text-center text-gray-600 mb-12">Explore experts in various</p>

            <div class="flex items-center justify-center space-x-4 overflow-x-auto pb-4">
                <button
                    class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">📋</div>
                    <p class="font-semibold text-gray-800 text-center">Tax Planning</p>
                </button>
                <button
                    class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">📊</div>
                    <p class="font-semibold text-gray-800 text-center">Investment</p>
                </button>
                <button
                    class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">🏦</div>
                    <p class="font-semibold text-gray-800 text-center">Retirement Planning</p>
                </button>
                <button
                    class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">💼</div>
                    <p class="font-semibold text-gray-800 text-center">Insurance</p>
                </button>
                <button
                    class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">💰</div>
                    <p class="font-semibold text-gray-800 text-center">Wealth Management</p>
                </button>
            </div>
        </div>
    </section>



    <!-- Why Choose DhanXpert -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">
                Why<br />
                Choose <span class="gradient-text">DhanXpert Solutions</span>
            </h2>
            <p class="text-center text-gray-600 mb-12">DhanXpert Solutions Hub for the discovery of a specially
                qualified and
                professional consultant.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Browse & Flexible</h3>
                    <p class="text-gray-600">Our advisors are matched to best-suit your needs</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-4xl mb-4">✓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Certified Xperts</h3>
                    <p class="text-gray-600">Only certified and qualified experts</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-4xl mb-4">🔒</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">360° Financial Access</h3>
                    <p class="text-gray-600">Comprehensive financial guidance</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-4xl mb-4">⭐</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Trust Comes First</h3>
                    <p class="text-gray-600">A comprehensive search for verified experts will earn trust</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Wall of Love / Testimonials -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Wall of Love</h2>
            <p class="text-center text-gray-600 mb-12">Trusted by investors, traders, and professionals across India.
            </p>

            <div class="bg-gray-900 rounded-2xl p-12 text-white relative">

                <!-- Slides -->
                <div class="testimonial">
                    <div class="text-center max-w-2xl mx-auto">
                        <div class="w-24 h-24 bg-blue-500 rounded-full mx-auto mb-6"></div>
                        <p class="text-lg mb-6 italic">"DhanXpert Solutions helped me understand market strategies
                            clearly.
                            I was able to start investing with confidence. Truly helpful team!"</p>
                        <h3 class="font-bold text-xl">Gaurang Sable</h3>
                        <p class="text-gray-400">Navi Mumbai</p>
                    </div>
                </div>

                <div class="testimonial hidden">
                    <div class="text-center max-w-2xl mx-auto">
                        <div class="w-24 h-24 bg-green-500 rounded-full mx-auto mb-6"></div>
                        <p class="text-lg mb-6 italic">"Their wealth planning advice has helped me grow steadily.
                            The support and clarity they provide is top-notch."</p>
                        <h3 class="font-bold text-xl">Gayatri Bhogle</h3>
                        <p class="text-gray-400">Mumbai</p>
                    </div>
                </div>

                <div class="testimonial hidden">
                    <div class="text-center max-w-2xl mx-auto">
                        <div class="w-24 h-24 bg-red-500 rounded-full mx-auto mb-6"></div>
                        <p class="text-lg mb-6 italic">"I learnt how to invest safely and avoid losses. Honest advisory
                            and
                            very beginner friendly."</p>
                        <h3 class="font-bold text-xl">Aman Vishwakarma</h3>
                        <p class="text-gray-400">Mumbai</p>
                    </div>
                </div>

                <!-- Navigation -->
                <button id="prev"
                    class="absolute left-6 top-1/2 -translate-y-1/2 text-4xl text-gray-400 hover:text-white">‹</button>
                <button id="next"
                    class="absolute right-6 top-1/2 -translate-y-1/2 text-4xl text-gray-400 hover:text-white">›</button>

            </div>
        </div>
    </section>




    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Frequently Asked Questions</h2>

            <div class="space-y-4">

                <!-- Q1 -->
                <div class="border border-gray-200 rounded-lg">
                    <button class="w-full p-6 flex justify-between items-center faq-toggle">
                        <h3 class="font-semibold text-gray-900">What is DhanXpert Solutions and how does it work?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 faq-content">
                        DhanXpert Solutions is a financial advisory service that helps individuals and businesses make
                        informed investment decisions.
                        We guide clients in stock market investment strategies, wealth planning, IPO opportunities, and
                        portfolio building —
                        ensuring growth with confidence and transparency.
                    </div>
                </div>

                <!-- Q2 -->
                <div class="border border-gray-200 rounded-lg">
                    <button class="w-full p-6 flex justify-between items-center faq-toggle">
                        <h3 class="font-semibold text-gray-900">Are all financial experts on DhanXpert Solutions
                            certified?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 faq-content">
                        Yes. Every expert in our advisory team is experienced and professionally trained in the Indian
                        financial markets.
                        We ensure that the guidance offered is reliable, research-backed, and suitable for different
                        investment needs.
                    </div>
                </div>

                <!-- Q3 -->
                <div class="border border-gray-200 rounded-lg">
                    <button class="w-full p-6 flex justify-between items-center faq-toggle">
                        <h3 class="font-semibold text-gray-900">How much does it cost to use DhanXpert Solutions?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 faq-content">
                        Our plans vary depending on your investment goals — whether short-term trading, long-term
                        investing, or wealth building.
                        We offer affordable and flexible advisory packages so that everyone can start investing
                        confidently.
                    </div>
                </div>

                <!-- Q4 -->
                <div class="border border-gray-200 rounded-lg">
                    <button class="w-full p-6 flex justify-between items-center faq-toggle">
                        <h3 class="font-semibold text-gray-900">How can I become an expert on DhanXpert Solutions?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 faq-content">
                        If you are skilled in financial analysis, stock market trading, or wealth planning, and you wish
                        to join our expert panel,
                        you may contact us. Our team reviews credentials to ensure professionalism and quality advice
                        for our clients.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')
</body>

</html>
<script>
    const slides = document.querySelectorAll('.testimonial');
    let index = 0;

    function showSlide(i) {
        slides.forEach((slide, idx) => {
            slide.classList.toggle('hidden', idx !== i);
        });
    }

    document.getElementById('prev').onclick = () => {
        index = (index - 1 + slides.length) % slides.length;
        showSlide(index);
    };

    document.getElementById('next').onclick = () => {
        index = (index + 1) % slides.length;
        showSlide(index);
    };

    showSlide(index);
</script>

<script>
    document.querySelectorAll('.faq-toggle').forEach(btn => {
        btn.addEventListener('click', () => {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('span');

            content.classList.toggle('hidden');
            icon.textContent = icon.textContent === '+' ? '-' : '+';
        });
    });
</script>