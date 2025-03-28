<nav class="bg-white border-b border-gray-100 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="font-bold text-xl">LOREM</a>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-gray-700 hover:text-gray-900">Link 1</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Link 2</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Link 3</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Link 4</a>
                <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Sign Up
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="mobile-menu-button">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="hidden mobile-menu md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-gray-900">Link 1</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-gray-900">Link 2</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-gray-900">Link 3</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-gray-900">Link 4</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-gray-900">Sign Up</a>
        </div>
    </div>
</nav>

