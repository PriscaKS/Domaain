@include('frontend.commons.header', ['pageTitle' => 'Dpp | policies'])

<style>
    :root {
        --dpp-blue: #0056b3;
        --dpp-red: #e63946;
        --dpp-gold: #ffd700;
        --dpp-dark: #1d3557;
        --custom-white: #f9f9f9;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--custom-white);
    }

    .playfair {
        font-family: 'Playfair Display', serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, rgba(0, 86, 179, 0.9) 0%, rgba(230, 57, 70, 0.85) 100%);
    }

    .policy-card {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        border-top: 4px solid var(--dpp-red);
    }

    .policy-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .timeline-dot {
        box-shadow: 0 0 0 8px rgba(230, 57, 70, 0.2);
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .text-gradient {
        background: linear-gradient(90deg, var(--dpp-blue), var(--dpp-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .parallax-section {
        background-attachment: fixed;
    }
</style>

<body class="bg-[var(--custom-white)] flex flex-col min-h-screen ubuntu-light">
    <!-- NAAVBAR CALL-->
    {{-- <div id="navbar-container" class="sticky top-0 bg-white z-50 shadow-md"></div> --}}
    <div class="sticky top-0 bg-white z-50 shadow-md">
        @include('frontend.components.navbar')
    </div>
    <!-- SIDEBAR-->
    {{-- <div id="sidebar-container"></div> --}}
    @include('frontend.components.sidebar')

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;" onclick="closeSidebar()">
    </div>

    <!-- Background Image Section with Overlay -->
    <div class="background-container-documents">
        <div class="overlay"></div> <!-- Gradient Overlay -->

        <div class="text-container">
            <div class="home-link playfair text-5xl md:text-7xl font-bold mb-6 animate-float">Party Policies And
                Ideology</div>
            <a href="/index.html" class="contact-text">home / Party Policies and Ideology</a>
        </div>
    </div>


    <!-- Policies and ideology Section -->

    <!-- POLICY GRID -->
    <section id="policies" class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span
                    class="inline-block px-4 py-1 bg-[var(--dpp-red)] text-white text-sm font-semibold rounded-full mb-4">Our
                    Commitments</span>
                <h2 class="playfair text-4xl md:text-5xl font-bold text-[var(--dpp-dark)] mb-6">Core <span
                        class="text-gradient">Policies</span></h2>
                <p class="max-w-2xl mx-auto text-gray-600">Foundational principles that guide our actions and
                    legislation</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Policy 1 -->
                <div class="policy-card bg-white rounded-lg shadow-md p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[var(--dpp-blue)]"></div>
                    <div class="text-[var(--dpp-red)] text-5xl mb-6">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="playfair text-2xl font-bold mb-4 text-[var(--dpp-dark)]">Democratic Reform</h3>
                    <p class="text-gray-600 mb-6">Transparent governance, electoral reform, and civic participation at
                        all levels of decision-making.</p>
                    <a href="#"
                        class="text-[var(--dpp-blue)] font-semibold hover:text-[var(--dpp-red)] transition flex items-center">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Policy 2 -->
                <div class="policy-card bg-white rounded-lg shadow-md p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[var(--dpp-blue)]"></div>
                    <div class="text-[var(--dpp-red)] text-5xl mb-6">
                        <i class="fas fa-hands-holding-heart"></i>
                    </div>
                    <h3 class="playfair text-2xl font-bold mb-4 text-[var(--dpp-dark)]">Social Justice</h3>
                    <p class="text-gray-600 mb-6">Comprehensive equality measures, minority protections, and universal
                        access to quality services.</p>
                    <a href="#"
                        class="text-[var(--dpp-blue)] font-semibold hover:text-[var(--dpp-red)] transition flex items-center">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Policy 3 -->
                <div class="policy-card bg-white rounded-lg shadow-md p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[var(--dpp-blue)]"></div>
                    <div class="text-[var(--dpp-red)] text-5xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="playfair text-2xl font-bold mb-4 text-[var(--dpp-dark)]">Economic Justice</h3>
                    <p class="text-gray-600 mb-6">Fair taxation, living wages, and support for small businesses and
                        workers' cooperatives.</p>
                    <a href="#"
                        class="text-[var(--dpp-blue)] font-semibold hover:text-[var(--dpp-red)] transition flex items-center">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Policy 4 -->
                <div class="policy-card bg-white rounded-lg shadow-md p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[var(--dpp-blue)]"></div>
                    <div class="text-[var(--dpp-red)] text-5xl mb-6">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="playfair text-2xl font-bold mb-4 text-[var(--dpp-dark)]">Green New Deal</h3>
                    <p class="text-gray-600 mb-6">Ambitious climate action, renewable energy transition, and sustainable
                        infrastructure.</p>
                    <a href="#"
                        class="text-[var(--dpp-blue)] font-semibold hover:text-[var(--dpp-red)] transition flex items-center">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Policy 5 -->
                <div class="policy-card bg-white rounded-lg shadow-md p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[var(--dpp-blue)]"></div>
                    <div class="text-[var(--dpp-red)] text-5xl mb-6">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3 class="playfair text-2xl font-bold mb-4 text-[var(--dpp-dark)]">Global Solidarity</h3>
                    <p class="text-gray-600 mb-6">Peaceful diplomacy, fair trade, and international cooperation on
                        global challenges.</p>
                    <a href="#"
                        class="text-[var(--dpp-blue)] font-semibold hover:text-[var(--dpp-red)] transition flex items-center">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Policy 6 -->
                <div class="policy-card bg-white rounded-lg shadow-md p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[var(--dpp-blue)]"></div>
                    <div class="text-[var(--dpp-red)] text-5xl mb-6">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="playfair text-2xl font-bold mb-4 text-[var(--dpp-dark)]">Digital Future</h3>
                    <p class="text-gray-600 mb-6">Universal broadband, data privacy rights, and ethical AI development
                        frameworks.</p>
                    <a href="#"
                        class="text-[var(--dpp-blue)] font-semibold hover:text-[var(--dpp-red)] transition flex items-center">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- QUOTE SECTION -->
    <section class="relative py-32 parallax-section bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80')">
        <div class="absolute inset-0 bg-gradient-to-r from-[var(--dpp-blue)] to-[var(--dpp-red)] opacity-85"></div>
        <div class="relative z-10 text-center text-white px-6 max-w-5xl mx-auto">
            <div class="text-[var(--dpp-gold)] text-5xl mb-8">
                <i class="fas fa-quote-left"></i>
            </div>
            <blockquote class="playfair text-3xl md:text-4xl italic leading-relaxed mb-8">
                "We stand at the crossroads of history, where progressive values must light our path forward. Our
                policies are not mere promises—they are our covenant with the people."
            </blockquote>
            <div class="w-20 h-1 bg-[var(--dpp-gold)] mx-auto mb-6"></div>
            <p class="text-xl font-semibold">— Democratic Progressive Party Manifesto</p>
        </div>
    </section>

    <!-- TIMELINE SECTION -->
    <section class="py-16 md:py-24 px-6 bg-gray-50 relative">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12 md:mb-20">
                <span
                    class="inline-block px-4 py-1 bg-[var(--dpp-blue)] text-white text-sm font-semibold rounded-full mb-4">
                    Our Legacy
                </span>
                <h2 class="playfair text-3xl md:text-5xl font-bold text-[var(--dpp-dark)] mb-6">
                    Milestones of <span class="text-gradient">Progress</span>
                </h2>
            </div>

            <!-- Vertical Timeline Line (Desktop Only) -->
            <div
                class="hidden md:block absolute left-1/2 top-48 bottom-0 w-1 bg-gradient-to-b from-[var(--dpp-blue)] to-[var(--dpp-red)] transform -translate-x-1/2">
            </div>

            <!-- Milestone Items -->
            <div class="space-y-12 md:space-y-16 relative">

                <!-- Milestone 1 (Odd: Text on Left, Image on Right) -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <!-- Text Content (Left) -->
                    <div class="w-full md:w-1/2 md:pr-8 text-right order-1">
                        <div class="flex items-center justify-end space-x-2">
                            <!-- Mobile Inline Dot -->
                            <span
                                class="block w-4 h-4 bg-white border-4 border-[var(--dpp-red)] rounded-full md:hidden"></span>
                            <span
                                class="inline-block px-4 py-2 bg-[var(--dpp-blue)] text-white text-sm font-bold rounded-full">
                                1998
                            </span>
                        </div>
                        <h3 class="playfair text-xl md:text-2xl font-bold text-[var(--dpp-dark)] mt-2">
                            Foundation
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base">
                            The DPP established its presence as a progressive force committed to democratic reforms and
                            innovation.
                        </p>
                    </div>

                    <!-- Absolute Center Dot (Desktop Only) -->
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2">
                        <div class="relative w-10 h-10">
                            <div class="absolute inset-0 bg-[var(--dpp-red)] opacity-20 rounded-full"></div>
                            <div
                                class="absolute inset-0 m-auto w-6 h-6 bg-white border-4 border-[var(--dpp-red)] rounded-full">
                            </div>
                        </div>
                    </div>

                    <!-- Image Content (Right) -->
                    <div class="w-full md:w-1/2 md:pl-8 order-2">
                        <!-- Desktop Image -->
                        <div class="hidden md:block">
                            <img src="/assets/images/Bingu.png" alt="Foundation" class="w-full rounded-lg shadow-lg">
                        </div>
                        <!-- Mobile Image -->
                        <div class="mt-4 md:hidden">
                            <img src="/assets/images/Bingu.png" alt="Foundation" class="w-full rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>

                <!-- Milestone 2 (Even: Image on Left, Text on Right) -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <!-- Text Content (Right) -->
                    <div class="w-full md:w-1/2 md:pl-8 text-left order-1 md:order-2">
                        <div class="flex items-center justify-start space-x-2">
                            <span
                                class="inline-block px-4 py-2 bg-[var(--dpp-blue)] text-white text-sm font-bold rounded-full">
                                2000
                            </span>
                            <!-- Mobile Inline Dot -->
                            <span
                                class="block w-4 h-4 bg-white border-4 border-[var(--dpp-red)] rounded-full md:hidden"></span>
                        </div>
                        <h3 class="playfair text-xl md:text-2xl font-bold text-[var(--dpp-dark)] mt-2">
                            First Presidential Victory
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base">
                            A historic win in the presidential election marked a turning point, shifting the political
                            landscape toward greater inclusivity.
                        </p>
                    </div>

                    <!-- Absolute Center Dot (Desktop Only) -->
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2">
                        <div class="relative w-10 h-10">
                            <div class="absolute inset-0 bg-[var(--dpp-red)] opacity-20 rounded-full"></div>
                            <div
                                class="absolute inset-0 m-auto w-6 h-6 bg-white border-4 border-[var(--dpp-red)] rounded-full">
                            </div>
                        </div>
                    </div>

                    <!-- Image Content (Left) -->
                    <div class="w-full md:w-1/2 md:pr-8 order-2 md:order-1">
                        <!-- Desktop Image -->
                        <div class="hidden md:block">
                            <img src="/assets/images/rally.jpg" alt="First Presidential Victory"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                        <!-- Mobile Image -->
                        <div class="mt-4 md:hidden">
                            <img src="/assets/images/rally.jpg" alt="First Presidential Victory"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>

                <!-- Milestone 3 (Odd: Text on Left, Image on Right) -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <!-- Text Content (Left) -->
                    <div class="w-full md:w-1/2 md:pr-8 text-right order-1">
                        <div class="flex items-center justify-end space-x-2">
                            <!-- Mobile Inline Dot -->
                            <span
                                class="block w-4 h-4 bg-white border-4 border-[var(--dpp-red)] rounded-full md:hidden"></span>
                            <span
                                class="inline-block px-4 py-2 bg-[var(--dpp-blue)] text-white text-sm font-bold rounded-full">
                                2023
                            </span>
                        </div>
                        <h3 class="playfair text-xl md:text-2xl font-bold text-[var(--dpp-dark)] mt-2">
                            Modern Progressive Agenda
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base">
                            The party unveiled a comprehensive agenda addressing contemporary challenges with innovative
                            policies and social inclusion.
                        </p>
                    </div>

                    <!-- Absolute Center Dot (Desktop Only) -->
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2">
                        <div class="relative w-10 h-10">
                            <div class="absolute inset-0 bg-[var(--dpp-red)] opacity-20 rounded-full"></div>
                            <div
                                class="absolute inset-0 m-auto w-6 h-6 bg-white border-4 border-[var(--dpp-red)] rounded-full">
                            </div>
                        </div>
                    </div>

                    <!-- Image Content (Right) -->
                    <div class="w-full md:w-1/2 md:pl-8 order-2">
                        <!-- Desktop Image -->
                        <div class="hidden md:block">
                            <img src="/assets/images/light-bulb-electricity.jpg" alt="Modern Progressive Agenda"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                        <!-- Mobile Image -->
                        <div class="mt-4 md:hidden">
                            <img src="/assets/images/light-bulb-electricity.jpg" alt="Modern Progressive Agenda"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>

                <!-- Milestone 4 (Even: Image on Left, Text on Right) -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <!-- Text Content (Right) -->
                    <div class="w-full md:w-1/2 md:pl-8 text-left order-1 md:order-2">
                        <div class="flex items-center justify-start space-x-2">
                            <span
                                class="inline-block px-4 py-2 bg-[var(--dpp-blue)] text-white text-sm font-bold rounded-full">
                                2024
                            </span>
                            <!-- Mobile Inline Dot -->
                            <span
                                class="block w-4 h-4 bg-white border-4 border-[var(--dpp-red)] rounded-full md:hidden"></span>
                        </div>
                        <h3 class="playfair text-xl md:text-2xl font-bold text-[var(--dpp-dark)] mt-2">
                            Continued Commitment to Growth
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base">
                            Focused on sustainable development, the DPP pushed forward initiatives in renewable energy
                            and infrastructure to spur long-term growth.
                        </p>
                    </div>

                    <!-- Absolute Center Dot (Desktop Only) -->
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2">
                        <div class="relative w-10 h-10">
                            <div class="absolute inset-0 bg-[var(--dpp-red)] opacity-20 rounded-full"></div>
                            <div
                                class="absolute inset-0 m-auto w-6 h-6 bg-white border-4 border-[var(--dpp-red)] rounded-full">
                            </div>
                        </div>
                    </div>

                    <!-- Image Content (Left) -->
                    <div class="w-full md:w-1/2 md:pr-8 order-2 md:order-1">
                        <!-- Desktop Image -->
                        <div class="hidden md:block">
                            <img src="/assets/images/accessibility.png" alt="Continued Commitment to Growth"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                        <!-- Mobile Image -->
                        <div class="mt-4 md:hidden">
                            <img src="/assets/images/accessibility.png" alt="Continued Commitment to Growth"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>

                <!-- Milestone 5 (Odd: Text on Left, Image on Right) -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <!-- Text Content (Left) -->
                    <div class="w-full md:w-1/2 md:pr-8 text-right order-1">
                        <div class="flex items-center justify-end space-x-2">
                            <!-- Mobile Inline Dot -->
                            <span
                                class="block w-4 h-4 bg-white border-4 border-[var(--dpp-red)] rounded-full md:hidden"></span>
                            <span
                                class="inline-block px-4 py-2 bg-[var(--dpp-blue)] text-white text-sm font-bold rounded-full">
                                2025
                            </span>
                        </div>
                        <h3 class="playfair text-xl md:text-2xl font-bold text-[var(--dpp-dark)] mt-2">
                            Vision for the Future
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base">
                            Articulating a forward-looking strategy, the DPP set out its vision for building an
                            inclusive, progressive society ready for future challenges.
                        </p>
                    </div>

                    <!-- Absolute Center Dot (Desktop Only) -->
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2">
                        <div class="relative w-10 h-10">
                            <div class="absolute inset-0 bg-[var(--dpp-red)] opacity-20 rounded-full"></div>
                            <div
                                class="absolute inset-0 m-auto w-6 h-6 bg-white border-4 border-[var(--dpp-red)] rounded-full">
                            </div>
                        </div>
                    </div>

                    <!-- Image Content (Right) -->
                    <div class="w-full md:w-1/2 md:pl-8 order-2">
                        <!-- Desktop Image -->
                        <div class="hidden md:block">
                            <img src="/assets/images/accessibility.png" alt="Vision for the Future"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                        <!-- Mobile Image -->
                        <div class="mt-4 md:hidden">
                            <img src="/assets/images/accessibility.png" alt="Vision for the Future"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/sidebar.js"></script>

</body>

</html>
