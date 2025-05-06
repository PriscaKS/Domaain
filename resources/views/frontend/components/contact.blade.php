<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <!-- TAILWINGIND -->

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

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --theme-color: #0055a4;
            --hover-theme-color: #003d75;
            --custom-white: #f8f9fa;
        }
        .ubuntu-light {
            font-family: 'Ubuntu', sans-serif;
            font-weight: 300;
        }
        .map-container {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }
        .map-container:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .location-card {
            transition: transform 0.3s ease;
        }
        .location-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

</head>
<body class="bg-[var(--custom-white)] flex flex-col min-h-screen ubuntu-light">
   
      <!-- NAAVBAR CALL-->
      <div id="navbar-container" class="sticky top-0 bg-white z-50 shadow-md"></div>

      <!-- SSIDEBAR-->
      <div id="sidebar-container"></div>
  
   
       <!-- Overlay -->
       <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40" style="display: none;" onclick="closeSidebar()"></div>
  



<!-- Contact Information Section -->
<div class="flex justify-center items-center mt-6 bg-[var(--custom-white)]  rounded-2xl w-full max-w-2xl mx-auto">
    
</div>


    <!-- Google Map Embed -->
  <!-- Map Section with Information Cards -->
  <div class="w-full px-4 py-10 max-w-7xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-8">
        <p class="text-md text-[var(--theme-color)] font-medium">Our Location</p>
        <h2 class="text-3xl font-bold mt-2 text-gray-600">Visit the <span class="text-[var(--theme-color)]">DPP Headquarters</span></h2>
        <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
            Our headquarters is conveniently located in Area 4, Lilongwe, serving as the central hub for all party activities and member engagement.
        </p>
    </div>

    <!-- Map and Information Cards Section -->
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Map Container -->
        <div class="w-full lg:w-2/3 rounded-xl overflow-hidden map-container">
            <iframe
                width="100%"
                height="450"
                style="border:0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15322.520211381722!2d33.765906744775386!3d-13.960619899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d3629eb8e2afb%3A0x69723e53ce4b7d61!2sDPP%20Headquarters!5e0!3m2!1sen!2sus!4v1680028291409!5m2!1sen!2sus"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- Information Cards -->
        <div class="w-full lg:w-1/3 flex flex-col gap-4">
            <!-- Address Card -->
            <div class="bg-white p-6 rounded-xl shadow-md location-card">
                <div class="flex items-start">
                    <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-700">Physical Address</h3>
                        <p class="text-gray-600 mt-1">DPP Headquarters</p>
                        <p class="text-gray-600">Area 4, Presidential Way</p>
                        <p class="text-gray-600">Lilongwe, Malawi</p>
                    </div>
                </div>
            </div>
            
            <!-- Contact Card -->
            <div class="bg-white p-6 rounded-xl shadow-md location-card">
                <div class="flex items-start">
                    <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                        <i class="fas fa-phone-alt text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-700">Contact Information</h3>
                        <p class="text-gray-600 mt-1">Phone: +265 1 774 646</p>
                        <p class="text-gray-600">Email: info@dpp.com</p>
                        
                          
                            <div class="flex justify-center space-x-7 mt-2">
                                <a href="https://www.facebook.com" target="_blank" class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.twitter.com" target="_blank" class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com" target="_blank" class="text-2xl sm:text-xl md:text-2xl lg:text-2xl text-[var(--theme-color)] hover:text-[var(--hover-theme-color)] transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                
                    </div>
                </div>
            </div>
            
            <!-- Hours Card -->
            <div class="bg-white p-6 rounded-xl shadow-md location-card">
                <div class="flex items-start">
                    <div class="bg-[var(--theme-color)] rounded-full p-3 mr-4">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-700">Opening Hours</h3>
                        <p class="text-gray-600 mt-1">Monday - Friday: 8:00 AM - 5:00 PM</p>
                        <p class="text-gray-600">Saturday: 9:00 AM - 12:00 PM</p>
                        <p class="text-gray-600">Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Directions Section -->
    <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
        <h3 class="font-bold text-xl text-gray-700 mb-3">How to Reach Us</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="flex items-start">
                <div class="text-[var(--theme-color)] mr-3">
                    <i class="fas fa-car text-2xl"></i>
                </div>
                <div>
                    <h4 class="font-medium text-gray-700">By Car</h4>
                    <p class="text-gray-600 text-sm">Located just off Presidential Way. Visitor parking available on premises.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="text-[var(--theme-color)] mr-3">
                    <i class="fas fa-bus text-2xl"></i>
                </div>
                <div>
                    <h4 class="font-medium text-gray-700">By Public Transport</h4>
                    <p class="text-gray-600 text-sm">Take bus routes 15 or 22 to Area 4 central stop, then a 5-minute walk.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="text-[var(--theme-color)] mr-3">
                    <i class="fas fa-walking text-2xl"></i>
                </div>
                <div>
                    <h4 class="font-medium text-gray-700">Walking Distance</h4>
                    <p class="text-gray-600 text-sm">15-minute walk from Lilongwe Central Market and main city center.</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- FOOTER section call -->
    <div class="w-full" id="footer-container"></div>   

    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/sidebar.js"></script>
</body>
</html>



