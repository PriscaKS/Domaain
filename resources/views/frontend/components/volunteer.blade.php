<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- COURESEL -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css">

    
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    
    <!-- JAVASCRIPT -->
    <script src="/assets/js/main.js" defer></script>
</head>

</head>
<body class="bg-[var(--custom-white)] flex flex-col min-h-screen ubuntu-light">
   
     <!-- Placeholder for navbar -->
     <div id="navbar-container" class=" sticky top-0 bg-white z-50 shadow-md"></div>
    
     <!-- Overlay - Using display:none to ensure it's hidden -->
     <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;" onclick="closeSidebar()"></div>
     
     <!-- Placeholder for sidebar -->
     <div id="sidebar-container"></div>
     


    <!-- Background Image Section with Overlay -->
    <div class="background-container-volunteer">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link">Volunteer</div>
            <a href="/index.html" class="contact-text">home / Volunteer</a>
        </div>
    </div>

    <!-- Volunteer Form Section -->
    <div class="flex justify-center items-center mt-6 bg-[var(--custom-white)] p-6 rounded-2xl w-full max-w-2xl mx-auto "> <!-- Centered with mx-auto -->
        <div class="w-full">
          <!-- Contact Us and Get in Touch Section -->
<div class="text-center mb-6 overflow-hidden">
    <!-- Animated Text Elements -->
    <div class="overflow-hidden">
        <p class="text-md text-[var(--theme-color)] font-bold transform translate-y-10 opacity-0 volunteer-tag">
            Volunteer
        </p>
    </div>
    
    <div class="overflow-hidden">
        <h2 class="text-3xl font-bold mt-2 text-gray-600 transform translate-y-10 opacity-0 volunteer-heading">
            Get in Touch and Volunteer <span class="text-[var(--theme-color)]">with Us</span>
        </h2>
    </div>
    
    <div class="overflow-hidden">
        <p class="text-gray-600 mt-4 font-normal transform translate-y-10 opacity-0 volunteer-text">
            Our campaign has come a long way, but there is still a lot of road ahead. Volunteer and help us win the fight for a better future. Every hand counts!
        </p>
    </div>
</div>

            <!-- Volunteer Form -->
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label class="block font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Phone Number</label>
                    <input type="tel" name="phone" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Message</label>
                    <textarea name="message" rows="5" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <button type="submit" class="w-full bg-[var(--theme-color)] text-white py-3 rounded-lg hover:bg-[var(--hover-theme-color)] focus:outline-none focus:ring-2 focus:ring-blue-500">
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