<nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-10">
                    <img src="{{ asset('images/dhanexpert.PNG') }}" alt="DhanXpert Logo" class="h-16 w-auto">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-10">
                <a href="{{url('/')}}" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
                <a href="{{url('/about')}}" class="text-gray-700 hover:text-blue-600 font-medium transition">About Us</a>
                <a href="{{url('/contact')}}" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact Us</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden focus:outline-none">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <a href="{{url('/')}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">Home</a>
        <a href="{{url('/about')}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">About Us</a>
        <a href="{{url('/contact')}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">Contact Us</a>
    </div>
</nav>

<script>
    const btn = document.getElementById("mobile-menu-btn");
    const menu = document.getElementById("mobile-menu");
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
