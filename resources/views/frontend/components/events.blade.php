<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>music</title>
    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <!-- JAVASCRIPT -->
    <script src="/assets/js/main.js" defer></script>
    <script src="/assets/js/music.js"></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">





</head>

<body class="bg-[var(--custom-white)] flex flex-col min-h-screen ubuntu-light">
    <!-- NAAVBAR CALL-->
    {{-- <div id="navbar-container" class="sticky top-0 bg-white z-50 shadow-md"></div> --}}
    <div class="sticky top-0 bg-white z-50 shadow-md">
        @include('frontend.components.navbar')
    </div>
    <!-- SSIDEBAR-->
    {{-- <div id="sidebar-container"></div> --}}

    @include('frontend.components.sidebar')
    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;"
        onclick="closeSidebar()"></div>

    <!-- Background Image Section with Overlay -->
    <div class="background-container-event">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link">DPP Event</div>
            <a href="/index.html" class="contact-text">home / event</a>
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

                <!-- Event 1 -->
                <div class="event-card bg-white rounded-xl overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87" alt="2019 Rally"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        <div class="absolute top-4 right-4 event-date px-4 py-2 rounded font-bold shadow-lg">May 2019
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <span class="text-gray-600">Kamuzu Stadium, Blantyre</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">2019 Presidential Campaign Launch</h3>
                        <p class="text-gray-600 mb-4">Over 50,000 supporters gathered as Prof. Mutharika unveiled the
                            "Malawi First" economic agenda with electrifying energy.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                View Gallery
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Rally</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Campaign</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="event-card bg-white rounded-xl overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622" alt="Women's Conference"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        <div class="absolute top-4 right-4 event-date px-4 py-2 rounded font-bold shadow-lg">March 2022
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <span class="text-gray-600">Bingu International Convention Centre</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Women's Empowerment Summit</h3>
                        <p class="text-gray-600 mb-4">DPP Women's Wing hosted 5,000 delegates to discuss gender equality
                            in politics and economic empowerment programs.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                View Gallery
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Conference</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Women</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="event-card bg-white rounded-xl overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30" alt="Youth Rally"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        <div class="absolute top-4 right-4 event-date px-4 py-2 rounded font-bold shadow-lg">August 2023
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <span class="text-gray-600">Mzuzu Stadium</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Youth Mobilization Mega Rally</h3>
                        <p class="text-gray-600 mb-4">Historic gathering of 30,000 young Malawians committing to voter
                            registration and economic development initiatives.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                View Gallery
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Youth</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Rally</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 4 -->
                <div class="event-card bg-white rounded-xl overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4" alt="Policy Launch"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        <div class="absolute top-4 right-4 event-date px-4 py-2 rounded font-bold shadow-lg">June 2021
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <span class="text-gray-600">Sunbird Capital Hotel, Lilongwe</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Economic Recovery Plan Launch</h3>
                        <p class="text-gray-600 mb-4">DPP leadership presented comprehensive strategies for
                            agricultural reform and industrial growth to stakeholders.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                View Gallery
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Policy</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Economy</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 5 -->
                <div class="event-card bg-white rounded-xl overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6" alt="Anniversary"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        <div class="absolute top-4 right-4 event-date px-4 py-2 rounded font-bold shadow-lg">February
                            2024</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <span class="text-gray-600">Mangochi Stadium</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">25th Anniversary Celebration</h3>
                        <p class="text-gray-600 mb-4">Grand celebration of DPP's quarter-century of service to Malawi,
                            showcasing achievements and future vision.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                View Gallery
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Anniversary</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Celebration</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 6 -->
                <div class="event-card bg-white rounded-xl overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a" alt="Convention"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        <div class="absolute top-4 right-4 event-date px-4 py-2 rounded font-bold shadow-lg">October
                            2023</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <span class="text-gray-600">Comesa Hall, Blantyre</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">National Convention</h3>
                        <p class="text-gray-600 mb-4">Delegates from all regions gathered to ratify the party's
                            constitution and elect new leadership structures.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                View Gallery
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Convention</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Leadership</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <span
                        class="bg-gradient-to-r from-blue-600 to-red-600 bg-clip-text text-transparent">Inspiring</span>
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
    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>
    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/sidebar.js"></script>


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
</body>

</html>
