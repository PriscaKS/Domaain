@include('frontend.commons.header', ['pageTitle' => 'Dpp | volunteer'])


<body class="bg-[var(--custom-white)] flex flex-col min-h-screen ubuntu-light">

    <!-- Placeholder for navbar -->
    <div class="sticky top-0 bg-white z-50 shadow-md">
        @include('frontend.components.navbar')
    </div>
    <!-- Overlay - Using display:none to ensure it's hidden -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;"
        onclick="closeSidebar()"></div>

    <!-- Placeholder for sidebar -->
    @include('frontend.components.sidebar')




    <!-- Background Image Section with Overlay -->
    <div class="background-container-volunteer">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link">Volunteer</div>
            <a href="{{ url('/') }}" class="contact-text"> Home /  </a>
            <span class="text-[var(--theme-color)] font-bold"> Volunteer</span>
        </div>
    </div>

    <!-- Volunteer Form Section -->
    <div
        class="flex justify-center items-center mt-6 bg-[var(--custom-white)] p-6 rounded-2xl w-full max-w-2xl mx-auto ">
        <!-- Centered with mx-auto -->
        <div class="w-full">
            <!-- Contact Us and Get in Touch Section -->
            <div class="text-center mb-6 overflow-hidden">
                <!-- Animated Text Elements -->
                <div class="overflow-hidden">
                    <p
                        class="text-md text-[var(--theme-color)] font-bold transform translate-y-10 opacity-0 volunteer-tag">
                        Volunteer
                    </p>
                </div>

                <div class="overflow-hidden">
                    <h2
                        class="text-3xl font-bold mt-2 text-gray-600 transform translate-y-10 opacity-0 volunteer-heading">
                        Get in Touch and Volunteer <span class="text-[var(--theme-color)]">with Us</span>
                    </h2>
                </div>

                <div class="overflow-hidden">
                    <p class="text-gray-600 mt-4 font-normal transform translate-y-10 opacity-0 volunteer-text">
                        Our campaign has come a long way, but there is still a lot of road ahead. Volunteer and help us
                        win the fight for a better future. Every hand counts!
                    </p>
                </div>
            </div>

            <!-- Volunteer Form -->
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label class="block font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Email</label>
                    <input type="email" name="email"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Phone Number</label>
                    <input type="tel" name="phone"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Message</label>
                    <textarea name="message" rows="5"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-[var(--theme-color)] text-white py-3 rounded-lg hover:bg-[var(--hover-theme-color)] focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
            </form>
        </div>
    </div>



    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>

    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/sidebar.js"></script>



    <script>
        // Register ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);

        // Animation timeline
        const volunteerTL = gsap.timeline({
            scrollTrigger: {
                trigger: ".text-center.mb-6",
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });

        volunteerTL
            .to(".volunteer-tag", {
                y: 0,
                opacity: 1,
                duration: 0.6,
                ease: "power2.out"
            })
            .to(".volunteer-heading", {
                y: 0,
                opacity: 1,
                duration: 0.6,
                ease: "power2.out"
            }, "-=0.4")
            .to(".volunteer-text", {
                y: 0,
                opacity: 1,
                duration: 0.6,
                ease: "power2.out"
            }, "-=0.3");
    </script>
</body>

</html>
