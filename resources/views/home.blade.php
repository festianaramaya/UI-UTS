@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gray-100 py-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl font-bold mb-6">Your Best Value Proposition</h1>
                <p class="text-gray-600 mb-8">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-black hover:bg-gray-800">
                    Get started
                </a>
            </div>
            
            <div class="mt-16 bg-white border border-gray-200 rounded-lg h-64 max-w-4xl mx-auto">
                <!-- Placeholder for main content/image -->
            </div>
        </div>
        
        <!-- Decorative elements -->
        <div class="absolute top-1/4 left-0">
            <div class="w-16 h-16 bg-black rounded-full"></div>
        </div>
        <div class="absolute bottom-1/4 right-1/4">
            <div class="w-16 h-16 bg-black rounded-full"></div>
        </div>
        <div class="absolute top-0 right-0">
            <div class="w-64 h-64 bg-black"></div>
        </div>
        <div class="absolute bottom-0 left-0">
            <div class="w-32 h-32 bg-black"></div>
        </div>
    </section>
    
    <!-- Testimonial Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <p class="text-lg italic mb-6">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
                </p>
                <p class="text-sm text-gray-600">
                    Maria Jones, VP Design at Reactify
                </p>
            </div>
        </div>
    </section>
    
    <!-- Second Value Proposition Section -->
    <section class="py-16 bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Your Best Value Proposition</h2>
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-white rounded-full mr-3"></div>
                        <p>John Doe, Product Manager</p>
                    </div>
                </div>
                <div>
                    <div class="bg-white h-64 w-full"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Third Value Proposition Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-6">Your Best Value Proposition</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    "If you don't try this app, you won't become the superhero you were meant to be."
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @for ($i = 1; $i <= 4; $i++)
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-black h-48 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white rounded"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-medium text-lg mb-2">Special Feature</h3>
                        <div class="mt-4">
                            <a href="#" class="text-sm text-gray-600 hover:text-gray-900">See More →</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
    
    <!-- Feature Highlight Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="bg-black h-64 w-full flex items-center justify-center">
                    <div class="w-32 h-32 bg-white"></div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-4">Feature that is amazing</h2>
                    <p class="text-gray-600 mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Free Trial Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h3 class="text-xl font-medium">Try the product out for free</h3>
            </div>
            
            <div class="max-w-md mx-auto">
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="email" name="email" id="email" placeholder="email" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="password" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <button type="submit" class="w-full px-4 py-2 bg-black text-white font-medium rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Start free trial
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

