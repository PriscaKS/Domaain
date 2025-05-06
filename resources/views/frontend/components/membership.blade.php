<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a member</title>
    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- COURESEL -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
        
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css">
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
    <div class="background-container-member">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link">Become a Member</div>
            <a href="/index.html" class="contact-text">home / Become a Member</a>
        </div>
    </div>

    <!-- Volunteer Form Section -->
    <div class="flex justify-center items-center mt-6 bg-[var(--custom-white)] p-6 rounded-2xl w-full max-w-3xl mx-auto "> <!-- Centered with mx-auto -->
        <div class="w-full">
            <!-- Contact Us and Get in Touch Section -->
            <div class="text-center mb-6">
                <p class="text-md text-[var(--theme-color)] text-bold">Become a Member</p>
                <h2 class="text-3xl font-bold mt-2 text-gray-600">Get in Touch and Become a Member <span class="text-[var(--theme-color)]">with Us</span></h2>
                <p class="text-gray-600 mt-4 font-normal">
                    Be the change you wish to see in the world. Every great movement begins with a single step, 
                    and that step starts with you. By becoming a member, you join a community of passionate individuals who 
                    are committed to creating real, lasting change. Together, we can tackle challenges, inspire progress, and build a 
                    future that reflects our shared values and dreams.
                </p>
            </div>

            <!-- Political Party Membership Registration Form -->
            <form action="#" method="POST" class="space-y-6">
                <!-- Personal Information Section -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Personal Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-medium text-gray-700">First Name*</label>
                            <input type="text" name="firstName" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Last Name*</label>
                            <input type="text" name="lastName" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Date of Birth*</label>
                            <input type="date" name="dateOfBirth" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Gender</label>
                            <select name="gender" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="non-binary">Non-binary</option>
                                <option value="other">Other</option>
                                <option value="prefer-not-to-say">Prefer not to say</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Contact Information Section -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Contact Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-medium text-gray-700">Email Address*</label>
                            <input type="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Phone Number*</label>
                            <input type="tel" name="phone" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                    </div>
                </div>

                <!-- Address Information Section -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Address Information</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block font-medium text-gray-700">Street Address*</label>
                            <input type="text" name="streetAddress" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block font-medium text-gray-700">City/Town*</label>
                                <input type="text" name="city" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div>
                                <label class="block font-medium text-gray-700">State/Province*</label>
                                <input type="text" name="state" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div>
                                <label class="block font-medium text-gray-700">ZIP/Postal Code*</label>
                                <input type="text" name="zipCode" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Voter Registration Information -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Voter Registration Information</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block font-medium text-gray-700">Are you a registered voter?*</label>
                            <div class="mt-2 space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="isRegisteredVoter" value="yes" class="h-4 w-4 text-blue-600" required>
                                    <span class="ml-2">Yes</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="isRegisteredVoter" value="no" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Voter ID Number (if applicable)</label>
                            <input type="text" name="voterIdNumber" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Membership Details Section -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Membership Details</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block font-medium text-gray-700">Membership Type*</label>
                            <select name="membershipType" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                <option value="">Select Membership Type</option>
                                <option value="standard">Standard Membership (MKW 10,000/year)</option>
                                <option value="student">Student Membership (MKW 20,000/year)</option>
                                <option value="senior">Senior Membership (MKW 30,000/year)</option>
                                <option value="family">Family Membership (MKW 40,000/year)</option>
                                <option value="lifetime">Lifetime Membership (MKW 100,000)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Areas of Interest (select all that apply)</label>
                            <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests" value="campaigning" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">Campaigning</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests" value="fundraising" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">Fundraising</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests" value="policyDevelopment" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">Policy Development</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests" value="communityOutreach" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">Community Outreach</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests" value="socialMedia" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">Social Media</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests" value="eventOrganizing" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">Event Organizing</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Would you like to volunteer?</label>
                            <div class="mt-2 space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="isVolunteer" value="yes" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">Yes</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="isVolunteer" value="no" class="h-4 w-4 text-blue-600">
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Information Section -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Additional Information</h3>
                    <div>
                        <label class="block font-medium text-gray-700">How did you hear about us?</label>
                        <select name="referralSource" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Option</option>
                            <option value="friend">Friend or Family</option>
                            <option value="socialMedia">Social Media</option>
                            <option value="news">News or Media</option>
                            <option value="event">Party Event</option>
                            <option value="website">Party Website</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">Additional Comments</label>
                        <textarea name="comments" rows="4" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <div class="space-y-4">
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="agreeTerms" class="h-4 w-4 text-blue-600" required>
                                <span class="ml-2 text-sm">I agree to the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a> and confirm that the information provided is accurate.*</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="agreeContactMe" class="h-4 w-4 text-blue-600">
                                <span class="ml-2 text-sm">I agree to receive emails, text messages, and other communications from the party.</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Payment Section (optional based on membership type) -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Payment Information</h3>
                    <p class="text-sm text-gray-600 mb-4">You will be redirected to our secure payment processor after submission.</p>
                </div>

                <p class="text-sm text-gray-500 mb-4">Fields marked with * are required.</p>

                <button onclick="window.location.href='#'" type="button" class="w-full bg-[var(--theme-color)] text-white py-3 rounded-lg hover:bg-[var(--hover-theme-color)] focus:outline-none focus:ring-2 focus:ring-blue-500 font-medium text-lg">
                    Complete Registration
                </button>
            </form>
        </div>
    </div>


  <!-- FOOTER section call -->
  <div class="w-full" id="footer-container"></div>  
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/navbar.js"></script>
  <script src="/assets/js/sidebar.js"></script>
</body>
</html>