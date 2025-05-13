@include('frontend.commons.header', ['pageTitle' => 'Dpp | News_detail'])

<body class="bg-[var(--custom-white)] flex flex-col min-h-screen ubuntu-light">
    <!-- NAVBAR CALL-->
    <div class="sticky top-0 bg-white z-50 shadow-md">
        @include('frontend.components.navbar')
    </div>

    <!-- SIDEBAR-->
    @include('frontend.components.sidebar')

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;" onclick="closeSidebar()">
    </div>

    <!-- Background Image Section with Overlay -->
    <div class="background-container-music">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link playfair text-5xl md:text-7xl font-bold mb-6 animate-float">DPP News</div>
            <a href="{{ url('/') }}" class="contact-text">home </a>
            / News /
            <span class="text-green-200"> {{ $news->title }}</span>
        </div>
    </div>
    <main class="container mx-auto px-4 py-10 lg:py-16">
        <!-- News Detail Header -->
        <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight text-gray-800 mb-6">{{ $news->title }}</h1>

        <!-- News Content and Image Side-by-Side -->
        <div class="flex flex-col lg:flex-row gap-8 mb-12">
            @if ($news->featured_image)
                <div class="lg:w-1/2 w-full rounded-lg overflow-hidden shadow-sm">
                    <img src="{{ asset('storage/' . $news->featured_image) }}" alt="Featured image"
                        class="w-full h-full object-cover rounded-lg">
                </div>
            @endif

            <div class="lg:w-1/2 w-full text-gray-700 leading-relaxed space-y-6 text-[1.05rem]">
                {!! nl2br(e($news->content)) !!}
            </div>
        </div>

        <!-- Related Articles Section -->
        @if ($relatedNews->count())
            <section class="mb-10">
                <h2 class="text-2xl lg:text-3xl font-semibold text-gray-800 mb-6 border-b pb-2">Related Articles</h2>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($relatedNews as $item)
                        <div
                            class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden news-card">
                            @if ($item->featured_image)
                                <img src="{{ asset('storage/' . $item->featured_image) }}" alt="Image"
                                    class="w-full h-44 object-cover">
                            @endif
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 text-gray-900">{{ $item->title }}</h3>
                                <p class="text-sm text-gray-600 mb-3">
                                    {{ \Illuminate\Support\Str::limit($item->content, 100) }}
                                </p>
                                <a href="{{ route('news_detail', $item->id) }}"
                                    class="inline-block text-indigo-600 hover:text-indigo-800 font-medium text-sm">Read
                                    More →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    </main>

    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>

    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/sidebar.js"></script>

    <script>
        // Animate news cards on scroll
        document.addEventListener('DOMContentLoaded', function() {
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
</body>

</html>
