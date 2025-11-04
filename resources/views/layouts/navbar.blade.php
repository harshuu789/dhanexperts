<nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-10">
                        <img src="{{ asset('images/dhanexpert.png') }}" alt="DhanXpert Logo" class="h-16 w-auto">
                        {{-- <span class="text-2xl font-bold">
                            <span class="text-gray-900">Dhan</span><span class="gradient-text">Xpert</span>
                        </span> --}}
                    </a>
                </div>
               <div class="hidden md:flex items-center space-x-10">
                <a href="{{url('/')}}" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
                <a href="{{url('/about')}}" class="text-gray-700 hover:text-blue-600 font-medium transition">About Us</a>
                <a href="{{url('/contact')}}" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact Us</a>
                    {{-- <button class="px-6 py-2 border-2 border-blue-600 text-blue-600 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition">
                        SIGNUP
                    </button> --}}
                </div>
            </div>
        </div>
</nav>