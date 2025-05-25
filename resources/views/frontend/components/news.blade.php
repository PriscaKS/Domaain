@push('styles')


    <style>
        :root {
            --custom-white: #f8f9fa;
            --custom-blue: #0056b3;
            --custom-gray: #6c757d;
        }

        .ubuntu-light {
            font-family: 'Ubuntu', sans-serif;
            font-weight: 300;
        }

        .playfair {
            font-family: 'Playfair Display', serif;
        }

        .background-container-music {
            position: relative;
            background-image: url('/api/placeholder/1920/600');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 3rem;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5));
        }

        .text-container {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .news-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .category-pill {
            transition: all 0.3s ease;
        }

        .category-pill:hover {
            transform: scale(1.05);
        }

        .newsletter-section {
            background-color: #f0f4f8;
        }
    </style>

@endpush
@extends('layouts.front', ['pageTitle' => 'Dpp | News'])

@section('content')


    <!-- Background Image Section with Overlay -->
    <div class="background-container-music">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link playfair text-5xl md:text-7xl font-bold mb-6 animate-float">DPP News</div>
            <a href="{{ url('/')}}" class="contact-text">Home / </a>
            <span class="text-blue-400 font-medium font-bold">News</span>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <!-- Search and Categories Section -->
        <div class="mb-12">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <!-- Search Bar -->
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <div class="relative">
                        <input type="text" placeholder="Search news..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Category Pills -->
                <div class="flex flex-wrap justify-center md:justify-end gap-2">
                    <a href="#"
                        class="category-pill bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-medium">All</a>
                    <a href="#"
                        class="category-pill bg-gray-200 hover:bg-blue-600 hover:text-white px-4 py-1 rounded-full text-sm font-medium transition-all">Technology</a>
                    <a href="#"
                        class="category-pill bg-gray-200 hover:bg-blue-600 hover:text-white px-4 py-1 rounded-full text-sm font-medium transition-all">Business</a>
                    <a href="#"
                        class="category-pill bg-gray-200 hover:bg-blue-600 hover:text-white px-4 py-1 rounded-full text-sm font-medium transition-all">Sports</a>
                    <a href="#"
                        class="category-pill bg-gray-200 hover:bg-blue-600 hover:text-white px-4 py-1 rounded-full text-sm font-medium transition-all">Entertainment</a>
                </div>
            </div>
        </div>

        <!-- Featured News -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold playfair mb-8 pb-2 border-b-2 border-blue-600 inline-block">Featured News</h2>

            <!-- Featured News Card -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-12">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="/api/placeholder/800/600" alt="Featured news" class="w-full h-64 md:h-full object-cover">
                    </div>
                    <div class="md:w-1/2 p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full mr-3">Technology</span>
                            <span class="text-gray-500 text-sm">May 10, 2025</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 playfair">Breakthrough in Quantum Computing Sets New Records
                        </h3>
                        <p class="text-gray-700 mb-6">Scientists have achieved a major breakthrough in quantum
                            computing, creating a stable quantum bit that maintains coherence for record-breaking
                            durations, paving the way for practical quantum applications.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/api/placeholder/40/40" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-sm font-medium">Dr. Maria Chen</span>
                            </div>
                            <a href="#" class="text-blue-600 font-medium hover:underline flex items-center">
                                Read More <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest News -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($newsList as $news)
                <div class="news-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <img src="{{ asset('storage/' . $news->featured_image) ?? '/api/placeholder/400/300' }}" alt="News Image"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span
                                class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full mr-3">{{ $news->category }}</span>
                            <span
                                class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($news->created_at)->format('M d, Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 playfair">{{ $news->title }}</h3>
                        <p class="text-gray-700 mb-4">{{ Str::limit($news->content, 120, '...') }}</p>
                        <a href="{{ route('news_detail', ['id' => $news->id]) }}"
                            class="text-blue-600 font-medium hover:underline flex items-center">
                            Read More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>




    </main>

@endsection
@push('scripts')

    <script>
        // Animate news cards on scroll
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize GSAP ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            // Animate the news cards
            gsap.utils.toArray('.news-card').forEach(card => {
                gsap.from(card, {
                    y: 50,
                    opacity: 0,
                    duration: 0.8,
                    scrollTrigger: {
                        trigger: card,
                        start: "top bottom-=100",
                        toggleActions: "play none none none"
                    }
                });
            });

            // Animate the category pills
            gsap.from('.category-pill', {
                opacity: 0,
                x: -20,
                stagger: 0.1,
                duration: 0.5,
                scrollTrigger: {
                    trigger: '.category-pill',
                    start: "top bottom-=50",
                    toggleActions: "play none none none"
                }
            });
        });
    </script>

@endpush