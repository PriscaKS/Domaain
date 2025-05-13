@include('frontend.commons.header', ['pageTitle' => 'Dpp | music'])

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
    {{-- <section class="py-16 bg-white">
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
    </section> --}}
    <div id="musicLis" class="bg-gray-100 rounded-lg p-10 shadow-lg w-full md:w-[80%] mx-auto">
        @if ($music->isEmpty())
            <p class="text-center text-gray-600">No music found. Please check back later!</p>
        @else
            <ul class="space-y-6">
                @foreach ($music as $track)
                    <li
                        class="flex flex-col md:flex-row items-center justify-between bg-white p-4 rounded shadow-sm hover:bg-gray-50 transition">
                        <div class="flex items-center space-x-4">
                            <div class="text-purple-600 text-xl">
                                <i class="fas fa-music"></i>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-800">{{ $track->title }}</p>
                                <p class="text-sm text-gray-500">{{ $track->artist }} &bull; {{ $track->category }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-4 md:mt-0">
                            <audio controls class="w-64">
                                <source src="{{ asset('storage/' . $track->file) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            {{-- <a href="{{ asset('storage/' . $track->file) }}" download
                                class="text-green-600 hover:text-green-800" title="Download">
                                <i class="fas fa-download text-xl"></i>
                            </a> --}}
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>


    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>

    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/sidebar.js"></script>

</body>

</html>
