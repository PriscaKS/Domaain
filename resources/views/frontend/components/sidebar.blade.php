

<!-- Sidebar -->
<aside id="sidebar" class="bg-[var(--nav-bg-color)] fixed left-0 top-0 h-full w-64 shadow-lg z-50">
    <div class="p-4">
        <button id="close-btn" class="text-white text-xl float-right">
            <i class="fas fa-times"></i>
        </button>
        <div class="flex items-center mb-6">
            <img src="{{ asset('assets/images/DPP-1-removebg-preview (2).png') }}" alt="Logo" class="h-12 w-auto mr-2">
            <h2 class="text-lg font-bold">Democratic Progressive Party</h2>
        </div>

        <ul class="space-y-4">
            <li>
                <a href="{{ url('/') }}" class="flex items-center p-2 text-white hover:bg-blue-600 rounded">
                    <i class="fas fa-home mr-2"></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Documents Dropdown -->
            <li>
                <button onclick="toggleDropdown('documents')" class="flex justify-between items-center p-2 text-white w-full hover:bg-blue-600 rounded">
                    <span><i class="fas fa-file-pdf mr-2"></i> Documents</span>
                    <i id="documents-arrow" class="fas fa-chevron-right"></i>
                </button>
                <ul id="documents" class="pl-6 hidden">
                    <li>
                        <button onclick="toggleDropdown('manifesto')" class="flex justify-between items-center p-2 text-white w-full hover:bg-blue-500 rounded">
                            <span>Manifesto</span>
                            <i id="manifesto-arrow" class="fas fa-chevron-right"></i>
                        </button>
                        <ul id="manifesto" class="pl-6 hidden">
                            <li><a href="{{ route('manifesto2019') }}" class="block p-2 text-white hover:bg-blue-400">Manifesto 2019</a></li>
                            <li><a href="{{ route('manifesto2025') }}" class="block p-2 text-white hover:bg-blue-400">Manifesto 2025</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('code_of_conduct') }}" class="block p-2 text-white hover:bg-blue-500">Code of Conduct and Ethics</a></li>
                    <li><a href="{{ url ('/') }}" class="block p-2 text-white hover:bg-blue-500">Party Policies and Ideology</a></li>
                </ul>
            </li>

            <!-- Media -->
            <li>
                <button onclick="toggleDropdown('media')" class="flex justify-between items-center p-2 text-white w-full hover:bg-blue-600 rounded">
                    <span><i class="fas fa-photo-video mr-2"></i> Media</span>
                    <i id="media-arrow" class="fas fa-chevron-right"></i>
                </button>
                <ul id="media" class="pl-6 hidden">
                    <li><a href="{{ route('music') }}" class="block p-2 text-white hover:bg-blue-500">DPP Music</a></li>
                    <li><a href="{{ route('events') }}" class="block p-2 text-white hover:bg-blue-500">Event Gallery</a></li>
                </ul>
            </li>

            <!-- Become a Member -->
            <li>
                <a href="{{ route('membership') }}" class="flex items-center p-2 text-white hover:bg-blue-600 rounded">
                    <i class="fas fa-user-plus mr-2"></i>
                    <span>Become a Member</span>
                </a>
            </li>

            <!-- Contacts -->
            <li>
                <a href="{{ route('contact') }}" class="flex items-center p-2 text-white hover:bg-blue-600 rounded">
                    <i class="fas fa-address-book mr-2"></i>
                    <span>Contacts</span>
                </a>
            </li>
        </ul>

        <!-- Donate -->
        <div class="mt-6">
            <button onclick="window.location.href='{{ route('donate') }}'" class="w-full bg-[var(--theme-color)] text-white py-2 rounded">
                Donate to a Party
            </button>
        </div>
    </div>
</aside>

