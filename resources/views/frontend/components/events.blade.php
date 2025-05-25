@extends('layouts.front', ['pageTitle' => 'Dpp | Events_Gallery'])

@section('content')
    <!-- Background Image Section with Overlay -->
    <div class="background-container-event">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link">DPP Event</div>
            <a href="{{ route('welcome') }}" class="contact-text">home / event</a>
        </div>
    </div>

    <!-- Event Section -->

    <!-- Event Gallery Section -->

    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Our Historic Gatherings</h2>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    The Democratic Progressive Party has been at the forefront of Malawi's political landscape, hosting
                    unforgettable events that have shaped our nation's future.
                    Browse through our gallery of past events and relive the passion, the speeches, and the unity that
                    defines DPP.
                </p>
            </div>

            <!-- Event Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($events as $event)
                    <div class="event-card bg-white rounded-xl overflow-hidden">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $event->image_url }}" alt="{{ $event->title }}"
                                class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div class="absolute top-4 bg-slate-400 right-4 event-date px-4 py-2 rounded font-bold shadow-lg">
                                {{ $event->event_date }}
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <span class="text-gray-600">{{ $event->location }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $event->title }}</h3>
                            <p class="text-gray-600 mb-4"> {{ \Illuminate\Support\Str::limit($event->description, 100) }}
                            </p>

                            <div class="flex justify-between items-center">
                                <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                    View Gallery <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                                <div class="flex space-x-2">
                                    @foreach ($event->tags ?? [] as $tag)
                                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Testimonials Section -->
    <section class=" bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-full mb-4 shadow-md transform transition-all hover:scale-105 duration-300">
                    Voices of Support
                </span>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-800 mb-6">
                    <span class="bg-gradient-to-r from-blue-600 to-red-600 bg-clip-text text-transparent">Inspiring</span>
                    Testimonials
                </h2>
                <p class="max-w-2xl mx-auto text-gray-600">Hear what Malawians say about our transformative events and
                    leadership</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-red-600 rounded-xl blur opacity-25 group-hover:opacity-75 transition duration-300">
                    </div>
                    <div
                        class="relative bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-600 to-yellow-500 flex items-center justify-center mr-4 text-white shadow-md">
                                <i class="fas fa-user-circle text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Sarah Banda</h4>
                                <p class="text-sm text-gray-500">Lilongwe Branch</p>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="relative">
                                <div class="absolute top-0 left-0 text-7xl text-gray-100 font-serif -mt-2 -ml-1">"
                                </div>
                                <p class="text-gray-700 relative z-10 italic pl-6">
                                    The energy at DPP rallies is unmatched. When Prof. Mutharika speaks, you can feel
                                    his genuine care for Malawi's future.
                                </p>
                            </div>
                        </div>
                        <div class="mt-6 text-yellow-500 text-lg">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-red-600 rounded-xl blur opacity-25 group-hover:opacity-75 transition duration-300">
                    </div>
                    <div
                        class="relative bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-600 to-yellow-500 flex items-center justify-center mr-4 text-white shadow-md">
                                <i class="fas fa-user-tie text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">James Phiri</h4>
                                <p class="text-sm text-gray-500">Youth Wing Leader</p>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="relative">
                                <div class="absolute top-0 left-0 text-7xl text-gray-100 font-serif -mt-2 -ml-1">"
                                </div>
                                <p class="text-gray-700 relative z-10 italic pl-6">
                                    The 2022 Youth Rally changed my life. DPP is the only party investing in young
                                    Malawians with real opportunities and leadership training.
                                </p>
                            </div>
                        </div>
                        <div class="mt-6 text-yellow-500 text-lg">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-red-600 rounded-xl blur opacity-25 group-hover:opacity-75 transition duration-300">
                    </div>
                    <div
                        class="relative bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-600 to-yellow-500 flex items-center justify-center mr-4 text-white shadow-md">
                                <i class="fas fa-user-graduate text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Grace Mwale</h4>
                                <p class="text-sm text-gray-500">University Student</p>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="relative">
                                <div class="absolute top-0 left-0 text-7xl text-gray-100 font-serif -mt-2 -ml-1">"
                                </div>
                                <p class="text-gray-700 relative z-10 italic pl-6">
                                    The DPP scholarship program allowed me to pursue my education. Their commitment to
                                    human capital development is changing lives across Malawi.
                                </p>
                            </div>
                        </div>
                        <div class="mt-6 text-yellow-500 text-lg">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-12">
            </div>


        </div>


    </section>

@endsection
@push('scripts')


<script>
    // Animation for event cards
    gsap.utils.toArray(".event-card").forEach(card => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: "top 80%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            ease: "power2.out"
        });
    });
</script>
@endpush