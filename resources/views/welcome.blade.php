<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- priscah headers --}}

    <title>DPP Official website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- TAILWIND -->

    <!-- MAIN JAVASCRIPT -->
    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    {{-- <script src="{{ asset('assets/js/music.js') }}"></script> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!-- JS -->
    {{-- end priscah --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @endif
</head>

<body class="bg-gray-100 ubuntu-light">

    <!-- Placeholder for navbar -->
    {{-- <div id="navbar-container" class="sticky top-0 bg-white z-50 shadow-md">

    </div> --}}
    <div class="sticky top-0 bg-white z-50 shadow-md">
        @include('frontend.components.navbar')
    </div>



    <!-- Overlay - Using display:none to ensure it's hidden -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;"
        onclick="closeSidebar()"></div>

    <!-- Placeholder for sidebar -->
    {{-- <div id="sidebar-container"></div> --}}
    @include('frontend.components.sidebar')


    <!-- Landing Section -->
    <section id="home" class="relative flex flex-col md:flex-row justify-center items-center text-center"
        style="background-image: url('{{ asset('assets/images/bg-home.jpeg') }}');
     background-size: cover;
     background-position: center;
     background-repeat: no-repeat;
     min-height: 100vh;">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-[var(--custom-black)] opacity-50"></div>

        <!-- Text Content -->
        <div class="text-[var(--custom-white)] p-10 max-w-3xl pt-20 relative z-10" id="heroText">
            <h1 class="text-4xl md:text-6xl font-bold text-[var(--custom-white)]">
                <span class="text-[var(--theme-color)]">Together</span>, We Can Make a Change We Want to See in the
                World
            </h1>
            <p class="mt-4 text-lg text-[var(--custom-white)]">
                At the heart of democracy lies the power of the people.
                By contributing to our mission, you become an essential
                part of driving positive change, shaping policies, and creating a
                brighter future for everyone.
            </p>
            <a href="#about"
                class="mt-6 inline-block bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-[var(--custom-white)] font-bold py-2 px-6 rounded-full">
                Learn More
            </a>
        </div>

        <!-- Image Content for All Screens -->
        <div class="mt-6 md:mt-0 lg:block relative z-40" id="imageContainer"
            style="width: 100vw; height: 100vh; padding: 0; margin: 0 auto; overflow-x: hidden;">
            <img src="{{ asset('assets/images/peter_home.png') }}" alt="Candidate" class="w-full h-full object-cover">
        </div>
    </section>

    <!-- END LANDING PAGE -->

    <!-- ABOUT SECTION -->

    <div class="main-content">
        <section id="about-section" class="w-full flex items-start py-16 px-10 bg-[var(--custom-white)]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 w-auto h-auto">
                <!-- Image Section -->
                <div class="relative flex justify-center overflow-hidden">
                    <!-- Updated Image Source -->
                    <img src="{{ asset('assets/images/peter-1.jpeg') }}" alt="Candidate"
                        class="w-full sm:w-[28rem] md:w-[32rem] lg:w-[36rem] rounded-lg transform transition-transform duration-1000 ease-out">

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 w-full h-1/4 bg-[var(--custom-orange)] rounded-b-lg flex items-center justify-center px-4">
                        <p class="text-[var(--custom-white)] text-lg font-semibold text-center">
                            "Change begins with <span class="font-bold">YOU</span>. Together, we rise!"
                        </p>
                    </div>
                </div>

                <!-- Goals Section -->
                <div class="text-left">
                    <p class="text-4xl font-semibold text-[var(--custom-black)] mt-2" id="about-statement-animation">
                        Welcome to the Democratic Progressive Party <span class="text-[var(--theme-color)]">(DPP)</span>
                        <br><span class="text-[var(--theme-color)]">DPP Woyeee!!! Malawi Woyeee!!!</span>
                    </p>
                    <p class="text-xl text-[var(--custom-black)] mt-2">
                        <!-- Add content here if needed -->
                    </p>
                    <h3 class="text-2xl font-semibold text-[var(--theme-color)] mt-6">
                        Key Agenda:
                    </h3>
                    <ul class="mt-6 space-y-4 text-lg text-[var(--custom-black)]">
                        <li class="flex items-center" id="agenda-goal-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Quality Education for All
                        </li>
                        <li class="flex items-center" id="agenda-goal-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Economic Justice & Wealth Redistribution
                        </li>
                        <li class="flex items-center" id="agenda-goal-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Nationalization of Key Sectors (Agriculture, Mining, Energy)
                        </li>
                        <li class="flex items-center" id="agenda-goal-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Investing in Infrastructure to Build Stronger Communities
                        </li>
                        <li class="flex items-center" id="agenda-goal-5">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[var(--custom-black)] font-bold mr-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Closing Economic Disparities
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- BECOME A VOLUNTEER -->
    <section class="volunteer-section">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="slide-in text-[var(--theme-color)] font-bold"> Become a Member</h2>
            <p class="slide-in highlighted-text">Our party is powered by contributions <span
                    class="text-[var(--theme-color)]">from supporters.</span></p>

            <button class="join-btn slide-in bg-[var(--theme-color)] rounded">

                <a href="{{ route('loading-screen') }}?redirect={{ route('membership') }}"> Join Us </a>
                <span>&#8594;</span>
            </button>
            <div class="stats">
                <div class="stat-item slide-in">
                    <i class="icon fas fa-users"></i>
                    <h3><span class="counter" data-target="2500">0</span>+</h3>
                    <p>Active Volunteers</p>
                </div>
                <div class="stat-item slide-in">
                    <i class="icon fas fa-bullhorn"></i>
                    <h3><span class="counter" data-target="120">0</span>+</h3>
                    <p>Campaigns</p>
                </div>
                <div class="stat-item slide-in">
                    <i class="icon fas fa-map-marked-alt"></i>
                    <h3><span class="counter" data-target="50">0</span>+</h3>
                    <p>Area Coverage</p>
                </div>
                <div class="stat-item slide-in">
                    <i class="icon fas fa-tasks"></i>
                    <h3><span class="counter" data-target="300">0</span>+</h3>
                    <p>Projects Done</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOCUS AREA -->
    <section class="focus-areas relative py-24 bg-[var(--theme-color)] text-white text-center">
        <p class="text-sm uppercase">Focus Area</p>
        <h2 class="text-4xl font-bold mt-2">How We Plan to Achieve a Better Country</h2>

        <!-- Focus Area Containers -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10 px-10">
            <div
                class="group bg-transparent border border-gray p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-heartbeat text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Healthcare</h3>
                <p class="mt-2">Ensuring accessible and quality healthcare for all.</p>
            </div>
            <div
                class="group bg-transparent border border-white p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-graduation-cap text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Education</h3>
                <p class="mt-2">Providing free and quality education for a brighter future.</p>
            </div>
            <div
                class="group bg-transparent border border-white p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-leaf text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Environment</h3>
                <p class="mt-2">Promoting sustainability and protecting natural resources.</p>
            </div>
            <div
                class="group bg-transparent border border-white p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-graduation-cap text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Education</h3>
                <p class="mt-2">Providing free and quality education for a brighter future.</p>
            </div>
            <div
                class="group bg-transparent border border-white p-6 rounded-lg text-center hover:shadow-[0_4px_10px_rgba(0,0,0,0.2)] transition-shadow duration-300 focus-item">
                <i class="fas fa-leaf text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Environment</h3>
                <p class="mt-2">Promoting sustainability and protecting natural resources.</p>
            </div>
        </div>
    </section>

    <!-- FLOATING CONTAINER WITH IMAGE AND TEXT -->
    <section class="relative z-10">
        <div class="container mx-auto px-10">
            <!-- Parent div for the entire section with customized width and height -->
            <div class="relative flex flex-col md:flex-row items-center justify-between bg-white text-black rounded-lg shadow-lg mx-auto"
                style="margin-top: -5%; overflow: hidden;">
                <!-- Image on the Top for small screens and Left for medium and large screens -->
                <div class="w-full relative h-full" id="floating-image">
                    <img src="{{ asset('assets/images/rally.jpg') }}" alt="Volunteer"
                        class="rounded-lg shadow-md object-cover w-full h-full md:h-[500px]">
                </div>
                <!-- Text & Button below for small screens and Right for medium and large screens -->
                <div class="w-full pl-6 text-black text-center md:text-left mt-4 md:mt-0 py-4 px-4 flex flex-col justify-between"
                    id="floating-text">
                    <h3 class="text-3xl font-semibold">Become a <span class="text-[var(--theme-color)]">
                            Volunteer</span> </h3>
                    <p class="mt-4 text-lg">Join our efforts in making a positive change. Volunteer today to help
                        support our causes and make a difference in the community.</p>
                    <button
                        onclick="window.location.href='{{ route('loading-screen') }}?redirect={{ route('volunteer') }}'"
                        class="mt-6 bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                        Sign Up to Volunteer
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- DPP Leaders -->
    <section class="py-10 bg-gray text-center">
        <p class="text-lg text-[var(--theme-color)] mt-2">Meet Our Leaders</p>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6 md:px-10 max-w-7xl mx-auto">
            <!-- President -->
            <div
                class="relative bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden leader-card">
                <div class="w-full aspect-[3/4] overflow-hidden relative">
                    <img src="{{ asset('assets/images/leaders/Peter-Mutharika.jpg') }}" alt="President"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                    <h3 class="text-xl font-semibold">Peter Mutharika</h3>
                    <p class="text-sm">President of the Democratic Progressive Party</p>
                </div>
            </div>

            <!-- Secretary General -->
            <div
                class="relative bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden leader-card">
                <div class="w-full aspect-[3/4] overflow-hidden relative">
                    <img src="{{ asset('assets/images/leaders/peter mukhito.jpg') }}" alt="Secretary General"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                    <h3 class="text-xl font-semibold">Peter Mukhito</h3>
                    <p class="text-sm">Secretary General</p>
                </div>
            </div>

            <!-- National Organiser Secretary-->
            <div
                class="relative bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden leader-card">
                <div class="w-full aspect-[3/4] overflow-hidden relative">
                    <img src="{{ asset('assets/images/leaders/sameer-suleman.jpg') }}"
                        alt="National Organiser Secretary" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                    <h3 class="text-xl font-semibold">Sameer Suleman</h3>
                    <p class="text-sm">National Organiser Secretary</p>
                </div>
            </div>

            <!-- Director of Election-->
            <div
                class="relative bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden leader-card">
                <div class="w-full aspect-[3/4] overflow-hidden relative">
                    <img src="{{ asset('assets/images/leaders/dr jean muthanga.jpg') }}" alt="Director of Election"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                    <h3 class="text-xl font-semibold">Jean Muthaga</h3>
                    <p class="text-sm">Director of Election</p>
                </div>
            </div>

            <!-- Director of political affairs-->
            <div
                class="relative bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden leader-card">
                <div class="w-full aspect-[3/4] overflow-hidden relative">
                    <img src="{{ asset('assets/images/leaders/ben phiri.jpeg') }}"
                        alt="Director of Political Affairs" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                    <h3 class="text-xl font-semibold">Ben Phiri</h3>
                    <p class="text-sm">Director of Political Affairs</p>
                </div>
            </div>

            <!-- Director of Women Affairs-->
            <div
                class="relative bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden leader-card">
                <div class="w-full aspect-[3/4] overflow-hidden relative">
                    <img src="{{ asset('assets/images/leaders/Mary-Navicha.jpg') }}" alt="Director of Women Affairs"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                    <h3 class="text-xl font-semibold">Mary Thom Navicha</h3>
                    <p class="text-sm">Director of Women Affairs</p>
                </div>
            </div>

            <!--National Director of youth-->
            <div
                class="relative bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden leader-card">
                <div class="w-full aspect-[3/4] overflow-hidden relative">
                    <img src="{{ asset('assets/images/leaders/norman chisale.jpg') }}" alt="Director of Youth"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 bg-[var(--custom-orange)] text-white w-full py-4 px-6">
                    <h3 class="text-xl font-semibold">Norman Chisale</h3>
                    <p class="text-sm">Director of Youth</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MUSIC SECTION -->
    <section class="py-10 bg-white px-10">
        <div class="py-4 flex flex-col items-center justify-center text-center h-full">
            <h2 class="text-md text-[var(--theme-color)] font-bold" id="music-title">DPP Music Vibes</h2>
            <p class="text-lg text-[var(--custom-black)] mt-2" id="music-subtitle">Feel the rhythm, enjoy the beats,
                and celebrate with the <span class="text-[var(--theme-color)]">best</span> tunes!</p>
        </div>

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">
            <!-- Left Side: Background Image with Overlay -->
            <div class="relative w-full md:w-1/2 h-80 md:h-[400px] rounded-lg overflow-hidden" id="music-image">
                <img src="{{ asset('assets/images/music/charming-amazing-afro-american-young-woman-sunglasses-dancing.jpg') }}"
                    alt="Person Listening to Music" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h2 class="text-4xl font-bold text-white">Feel the Vibes</h2>
                </div>
            </div>

            <!-- Music Player Container -->
            <div id="musicList" class="bg-gray-100 rounded-lg p-6 shadow-lg w-full md:w-[80%] mx-auto"
                id="music-player">
                <!-- Music player content goes here -->
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Register GSAP plugins
            gsap.registerPlugin(ScrollTrigger);

            // Music Title Animation
            const musicTitle = document.getElementById('music-title');
            if (musicTitle) {
                gsap.from(musicTitle, {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                    scrollTrigger: {
                        trigger: musicTitle,
                        start: "top 80%", // Start animation when the title is 80% in view
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Subtitle Animation
            const musicSubtitle = document.getElementById('music-subtitle');
            if (musicSubtitle) {
                gsap.from(musicSubtitle, {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                    delay: 0.3, // Slight delay after the title animation
                    scrollTrigger: {
                        trigger: musicSubtitle,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Image Animation
            const musicImage = document.getElementById('music-image');
            if (musicImage) {
                gsap.from(musicImage, {
                    x: -100, // Slide in from the left
                    opacity: 0,
                    duration: 1.5,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: musicImage,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }

            // Music Player Animation
            const musicPlayer = document.getElementById('music-player');
            if (musicPlayer) {
                gsap.from(musicPlayer, {
                    x: 100, // Slide in from the right
                    opacity: 0,
                    duration: 1.5,
                    delay: 0.3, // Slight delay after the image animation
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: musicPlayer,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            }
        });

        const imageOverlayText = document.querySelector('#music-image h2');
        if (imageOverlayText) {
            gsap.from(imageOverlayText, {
                y: 20,
                opacity: 0,
                duration: 1,
                delay: 0.5, // Delay after the image animation
                scrollTrigger: {
                    trigger: imageOverlayText,
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });
        }
    </script>

    <div class="w-full" id="history-container"></div>

    <!-- FOOTER section call -->
    @include('partials.footer')
    {{-- <div class="w-full" id="footer-container"></div> --}}


    <script src="{{ asset('assets/js/navbar.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/music.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
