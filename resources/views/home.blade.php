<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhanXpert - Find And Book Certified Financial Xperts</title>
     <link rel="icon" type="image/png" href="{{ asset('images/dhanexpert.PNG') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
    <section class="bg-gradient-to-br from-blue-50 to-purple-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-900 text-center mb-12">
                Find And Book Certified<br/>
                <span class="gradient-text">Individual Financial Xperts Instantly</span>
            </h1>
            
            <!-- Search Bar -->
            <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl p-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="relative">
                        <input type="text" placeholder="Search - Find Financial Xperts..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="relative">
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 appearance-none">
                            <option>Select Category</option>
                            <option>Tax Planning</option>
                            <option>Investment</option>
                        </select>
                    </div>
                    <div class="relative">
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 appearance-none">
                            <option>Sort By: Top Consulted</option>
                            <option>Price: Low to High</option>
                            <option>Rating</option>
                        </select>
                    </div>
                    <div class="relative">
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 appearance-none">
                            <option>Gender: Female</option>
                            <option>Male</option>
                            <option>Any</option>
                        </select>
                    </div>
                    <div class="relative">
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 appearance-none">
                            <option>PME (SEBI Licensed)</option>
                            <option>Certified Advisor</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Browse Categories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">
                Browse Financial Xperts<br/>
                <span class="gradient-text">by Categories & Area of Expertise.</span>
            </h2>
            <p class="text-center text-gray-600 mb-12">Explore experts in various</p>
            
            <div class="flex items-center justify-center space-x-4 overflow-x-auto pb-4">
                <button class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">📋</div>
                    <p class="font-semibold text-gray-800 text-center">Tax Planning</p>
                </button>
                <button class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">📊</div>
                    <p class="font-semibold text-gray-800 text-center">Investment</p>
                </button>
                <button class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">🏦</div>
                    <p class="font-semibold text-gray-800 text-center">Retirement Planning</p>
                </button>
                <button class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">💼</div>
                    <p class="font-semibold text-gray-800 text-center">Insurance</p>
                </button>
                <button class="flex-shrink-0 bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-blue-500 hover:shadow-lg transition">
                    <div class="text-4xl mb-2 text-center">💰</div>
                    <p class="font-semibold text-gray-800 text-center">Wealth Management</p>
                </button>
            </div>
        </div>
    </section>

    <!-- Financial Experts Grid -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Expert Card 1 -->
                <div class="expert-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-24"></div>
                    <div class="p-6 -mt-12">
                        <img src="https://via.placeholder.com/80" alt="Expert" class="w-20 h-20 rounded-full border-4 border-white mb-4">
                        <div class="flex items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Shrikesh Jagannath Karhane</h3>
                            <span class="ml-2 text-green-500">✓</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">RichVaani Finsol Expert</p>
                        <p class="text-xs text-gray-500 mb-4">SEBI Reg. Cert (Portfolio Management Service)</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">⭐ 1.0 Experience</span>
                            <button class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Expert Card 2 -->
                <div class="expert-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-600 h-24"></div>
                    <div class="p-6 -mt-12">
                        <img src="https://via.placeholder.com/80" alt="Expert" class="w-20 h-20 rounded-full border-4 border-white mb-4">
                        <div class="flex items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Kumud Kumar Mandal</h3>
                            <span class="ml-2 text-green-500">✓</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Financial Expert</p>
                        <p class="text-xs text-gray-500 mb-4">Certified Portfolio Manager</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">⭐ 4.5 Experience</span>
                            <button class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Expert Card 3 -->
                <div class="expert-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-gradient-to-r from-pink-500 to-red-600 h-24"></div>
                    <div class="p-6 -mt-12">
                        <img src="https://via.placeholder.com/80" alt="Expert" class="w-20 h-20 rounded-full border-4 border-white mb-4">
                        <div class="flex items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Sandhya Solanke Mazumdar</h3>
                            <span class="ml-2 text-green-500">✓</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Tax Consultant</p>
                        <p class="text-xs text-gray-500 mb-4">Certified Tax Expert</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">⭐ 4.0 Experience</span>
                            <button class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Expert Card 4 -->
                <div class="expert-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 h-24"></div>
                    <div class="p-6 -mt-12">
                        <img src="https://via.placeholder.com/80" alt="Expert" class="w-20 h-20 rounded-full border-4 border-white mb-4">
                        <div class="flex items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Mohit Balakrishna Chauthaiwale</h3>
                            <span class="ml-2 text-green-500">✓</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Investment Advisor</p>
                        <p class="text-xs text-gray-500 mb-4">SEBI Certified Advisor</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">⭐ 3.5 Experience</span>
                            <button class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Expert Card 5 -->
                <div class="expert-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-gradient-to-r from-yellow-500 to-orange-600 h-24"></div>
                    <div class="p-6 -mt-12">
                        <img src="https://via.placeholder.com/80" alt="Expert" class="w-20 h-20 rounded-full border-4 border-white mb-4">
                        <div class="flex items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Ajay Dedhottama Chapade</h3>
                            <span class="ml-2 text-green-500">✓</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">RichVaani Finsol Expert</p>
                        <p class="text-xs text-gray-500 mb-4">Portfolio Management Expert</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">⭐ 5.0 Experience</span>
                            <button class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Expert Card 6 -->
                <div class="expert-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 to-teal-600 h-24"></div>
                    <div class="p-6 -mt-12">
                        <img src="https://via.placeholder.com/80" alt="Expert" class="w-20 h-20 rounded-full border-4 border-white mb-4">
                        <div class="flex items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Dhiraj Uttamal Shah</h3>
                            <span class="ml-2 text-green-500">✓</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">RichVaani Finsol Expert</p>
                        <p class="text-xs text-gray-500 mb-4">Wealth Management Specialist</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">⭐ 4.8 Experience</span>
                            <button class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5 Easy Steps Section -->
    {{-- <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-8">
                        Smarter Financial Decisions in <span class="gradient-text">5 Easy Steps</span>
                    </h2>
                    <p class="text-gray-600 mb-8">Your path to better financial choices in five straightforward actions.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold mr-4">1</div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Download The App</h3>
                                <p class="text-gray-600 text-sm">Get started by downloading our mobile application</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold mr-4">2</div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Get Started with Ease</h3>
                                <p class="text-gray-600 text-sm">Sign up effortlessly using Google, Apple ID, or email</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold mr-4">3</div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Search & Discover Xperts</h3>
                                <p class="text-gray-600 text-sm">Find the perfect financial expert for your needs</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold mr-4">4</div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Book Consultation</h3>
                                <p class="text-gray-600 text-sm">Schedule your personalized advice session</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold mr-4">5</div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Get Personalized Advice</h3>
                                <p class="text-gray-600 text-sm">Receive tailored financial guidance</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="relative">
                        <div class="w-80 h-[600px] bg-gradient-to-br from-blue-600 to-purple-700 rounded-[3rem] p-8 shadow-2xl">
                            <div class="bg-white rounded-[2rem] h-full flex items-center justify-center">
                                <span class="text-2xl font-bold gradient-text">DhanXpert</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Why Choose DhanXpert -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">
                Why<br/>
                Choose <span class="gradient-text">DhanXpert</span>
            </h2>
            <p class="text-center text-gray-600 mb-12">DhanXpert Hub for the discovery of a specially qualified and professional consultant.</p>
            
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

    <!-- Download App Section -->
    {{-- <section class="py-16 bg-gradient-to-br from-blue-600 to-purple-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-white mb-4">
                Download The DhanXpert App
            </h2>
            <p class="text-center text-white mb-12">Get access to the best financial experts on the go</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-center">
                    <div class="bg-white p-8 rounded-2xl inline-block mb-6">
                        <div class="w-48 h-48 bg-gray-200 flex items-center justify-center rounded-xl">
                            <span class="text-gray-400">QR Code</span>
                        </div>
                    </div>
                    <p class="text-white mb-4">Scan to download</p>
                    <div class="flex justify-center space-x-4">
                        <img src="https://via.placeholder.com/150x50?text=App+Store" alt="App Store" class="h-12">
                        <img src="https://via.placeholder.com/150x50?text=Google+Play" alt="Google Play" class="h-12">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="relative">
                        <div class="w-80 h-[600px] bg-white rounded-[3rem] p-8 shadow-2xl">
                            <div class="bg-linear-to-br from-blue-600 to-purple-700 rounded-4xl h-full flex items-center justify-center">
                                <span class="text-2xl font-bold text-white">DhanXpert</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Wall of Love / Testimonials -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Wall of Love</h2>
            <p class="text-center text-gray-600 mb-12">So Easy of Finding your best Xpert right sign Top 50+ Brands trust us</p>
            
            <div class="bg-gray-900 rounded-2xl p-12 text-white">
                <div class="flex items-center justify-between">
                    <button class="text-4xl">‹</button>
                    <div class="text-center max-w-2xl mx-12">
                        <div class="w-24 h-24 bg-blue-500 rounded-full mx-auto mb-6"></div>
                        <p class="text-lg mb-6 italic">"I was searching for a qualified tax expert and DhanXpert made it so much easier to find and get the exact professional skill that I was looking for. As a first-time user, I was very impressed with the seamless booking process..."</p>
                        <h3 class="font-bold text-xl">Rahul Gupta</h3>
                        <p class="text-gray-400">Mumbai</p>
                    </div>
                    <button class="text-4xl">›</button>
                </div>
            </div>
        </div>
    </section>

    <!-- DhanXpert Talks -->
    {{-- <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">DhanXpert Talks</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <img src="https://via.placeholder.com/300x200" alt="Talk" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-sm text-gray-600">Mind-blowing Money Tips</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <img src="https://via.placeholder.com/300x200" alt="Talk" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-sm text-gray-600">Tax-saving Ideas</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <img src="https://via.placeholder.com/300x200" alt="Talk" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-sm text-gray-600">Workshop on Real Financial Freedom</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <img src="https://via.placeholder.com/300x200" alt="Talk" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-sm text-gray-600">Mutual Funds: All You Need to Know</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Frequently Asked Questions</h2>
            
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg p-6 hover:border-blue-500 cursor-pointer transition">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-900">What is DhanXpert and how does it work?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:border-blue-500 cursor-pointer transition">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-900">Are all financial experts on DhanXpert?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:border-blue-500 cursor-pointer transition">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-900">How much does it cost to use DhanXpert?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:border-blue-500 cursor-pointer transition">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-900">How can I become an expert on DhanXpert?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:border-blue-500 cursor-pointer transition">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-gray-900">Is DhanXpert available on mobile?</h3>
                        <span class="text-2xl text-gray-400">+</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>