<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Default Title' }}</title>

    {{-- Vite CSS --}}
    @vite('resources/css/app.css')

    {{-- External Libraries --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="icon" type="image/png" href="/favicon.png">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    {{-- Flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js" defer></script>
    @stack('styles')
</head>

<body class="bg-white text-gray-900">

    {{-- Navbar (if it's a Blade partial) --}}

    <div class="sticky top-0 bg-white z-50 shadow-md">
        @include('frontend.commons.navbar')
    </div>
    <!-- Overlay - Using display:none to ensure it's hidden -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;" onclick="closeSidebar()">
    </div>



    @include('frontend.commons.sidebar')


    {{-- Main page content --}}
    <main>
        @yield('content')
    </main>



    <div class="w-full">
        @include('partials.footer')
    </div>


    @vite('resources/js/app.js')

    @stack('scripts')

</body>

</html>