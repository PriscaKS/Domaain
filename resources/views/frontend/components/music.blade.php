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

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <!-- JAVASCRIPT -->
    <script src="/assets/js/main.js" defer></script>
    <script src="/assets/js/music.js"></script>
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
    <div class="background-container-music">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link playfair text-5xl md:text-7xl font-bold mb-6 animate-float">DPP Music</div>
            <a href="/index.html" class="contact-text">home / Music</a>
        </div>
    </div>

    <!-- Music Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto flex flex-col items-center justify-center text-center space-y-6">
            <h2 class="text-4xl text-[var(--theme-color)] font-bold">DPP Party Music Vibes</h2>
            <p class="text-lg text-[var(--custom-black)]">Feel the rhythm, enjoy the beats, and celebrate with the <span
                    class="text-[var(--theme-color)]">best</span> tunes!</p>
        </div>

        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center mt-10 space-x-6">
            <!-- Left Side: Empty for future content, if needed -->
            <div class="flex-1"></div>

            <!-- Music Player -->
            <div id="musicList" class="bg-gray-100 rounded-lg p-10 shadow-lg w-full md:w-[80%] mx-auto">
                <!-- Music player content goes here -->
            </div>

            <!-- Right Side: Empty space for alignment if needed -->
            <div class="flex-1"></div>
        </div>
    </section>

    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>

    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/sidebar.js"></script>

</body>

</html>
