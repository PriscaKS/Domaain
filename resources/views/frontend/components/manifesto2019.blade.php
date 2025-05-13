@include('frontend.commons.header', ['pageTitle' => 'Dpp | manfesto2019'])



</head>

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
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;"
        onclick="closeSidebar()"></div>

    <!-- Background Image Section with Overlay -->
    <div class="background-container-documents">
        <div class="overlay"></div> <!-- Gradient Overlay -->

        <div class="text-container">
            <div class="home-link">Manifesto for 2019</div>
            <a href="/index.html" class="contact-text">home / Manifesto for 2019</a>
        </div>
    </div>

    <!-- Volunteer Form Section -->

    <!-- Manifesto Section -->
    <div class="flex flex-col items-center mt-10 p-6 bg-white shadow-lg rounded-lg w-full max-w-6xl mx-auto">
        <h2 class="text-2xl font-semibold text-[var(--theme-color)] mb-4">Democratic Progressive Party Manifesto</h2>
        <p class="text-gray-600 mb-6 text-center">Read the official manifesto below or download a copy.</p>

        <!-- Embedded Online PDF -->
        <div class="w-full h-[500px] border rounded-lg shadow-md">
            <iframe src="https://mininginmalawi.files.wordpress.com/2019/05/dpp-manifesto-2019.pdf"
                class="w-full h-full" frameborder="0"></iframe>
        </div>

        <!-- Download Button -->
        <a href="https://mininginmalawi.files.wordpress.com/2019/05/dpp-manifesto-2019.pdf" target="_blank"
            class="mt-6 bg-[var(--theme-color)] text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center gap-2">
            <i class="fas fa-download"></i> Download Manifesto
        </a>
    </div>





    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>


    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/sidebar.js"></script>
</body>

</html>
