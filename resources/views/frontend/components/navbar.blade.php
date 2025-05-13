<style>
    /* Ensure active state is visible */
    .active-page {
        color: var(--theme-color) !important;
        font-weight: bold;
    }

    .group.active>.nav-link {
        color: var(--theme-color) !important;
    }

    /* Debug: Add a border to active links for visibility */
    .active-page {
        border-bottom: 2px solid var(--theme-color);
    }
</style>


<!-- Navbar -->
<nav class="bg-[var(--nav-bg-color)] text-white px-10  py-2 flex justify-between items-center">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="flex items-center gap-2 md:mr-8">
        <img src="{{ asset('assets/images/DPP-1-removebg-preview (2).png') }}" alt="Logo" class="h-16 w-auto md:h-20">
    </a>

    <ul class="hidden md:flex space-x-6 items-center relative z-50 ubuntu-regular">
        <!-- Home (Dropdown) -->
        <li class="relative group">
            <a href="{{ url('/') }}" class="nav-link md:text-sm lg:text-lg">Home</a>

        </li>
        <!-- Documents Dropdown with Fixed Manifesto Submenu -->
        <!-- Documents Dropdown with Fixed Manifesto Submenu -->
        <li class="relative group">
            <a href="#" class="nav-link md:text-sm lg:text-lg">Documents</a>
            <ul class="absolute left-0 hidden group-hover:block bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-2 z-50 w-[230px]"
                id="documentsDropdown">
                <!-- Manifesto (Hover + Click) with improved structure -->
                <li class="relative group/manifesto" id="manifestoContainer">
                    <a href="#"
                        class="block px-4 py-2 flex items-center justify-between hover:bg-[var(--theme-color)]"
                        id="manifestoToggle">
                        Manifesto
                        <span class="ml-1 transform group-hover/manifesto:rotate-180 transition-transform">▼</span>
                    </a>
                    <!-- Manifesto Mini Dropdown - positioned immediately adjacent to parent -->
                    <ul id="manifestoDropdown"
                        class="absolute left-[calc(100%+0px)] top-0 hidden group-hover/manifesto:block bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-2 z-50 w-48">
                        <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}"
                                class="block px-4 py-2 hover:bg-[var(--theme-color)] hover:text-white transition-colors">2019
                                Manifesto</a></li>
                        <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2025') }}"
                                class="block px-4 py-2 hover:bg-[var(--theme-color)] hover:text-white transition-colors">2025
                                Manifesto</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('policies') }}"
                        class="block px-4 py-2 hover:bg-[var(--theme-color)] hover:text-white transition-colors">Party
                        Policies & Ideology</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('code_of_conduct') }}"
                        class="block px-4 py-2 hover:bg-[var(--theme-color)] hover:text-white transition-colors">Code
                        of Conduct & Ethics</a></li>
            </ul>
        </li>


        <!-- Become a Member -->
        <li><a href="{{ route('loading-screen') }}?redirect={{ route('membership') }}"
                class="nav-link md:text-sm lg:text-lg">Become a Member</a></li>
        <!-- Media (Dropdown) -->
        <li class="relative group">
            <a href="#" class="nav-link md:text-sm lg:text-lg">Media</a>
            <ul
                class="absolute left-0 hidden group-hover:block bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-2 z-50  w-[150px]">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block px-4 py-2">DPP
                        Music</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('events') }}"
                        class="block px-4 py-2">Event Gallery</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('news') }}"
                        class="block px-4 py-2">DPP News</a></li>
            </ul>
        </li>


        <!-- Contacts -->
        <li><a href="{{ route('contact') }}" class="nav-link md:text-sm lg:text-lg">Contacts</a></li>

        <!-- Donate Button -->
        <li class=" nav-link md:text-sm lg:text-lg flex-shrink-0">
            <a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}"
                class="bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-2 px-6 rounded-full whitespace-nowrap">
                Donate to Party
            </a>
        </li>
    </ul>


    <!-- HAMBURGER -->
    <button id="menu-toggle" class="text-2xl md:hidden">
        <i class="fas fa-bars"></i>
    </button>
</nav>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get current page filename and full path
        const currentPath = window.location.pathname;
        const currentPage = currentPath.split('/').pop();

        // Function to determine if a link is active
        function isLinkActive(href) {
            // If href is empty or just '#', ignore
            if (!href || href === '#') return false;

            // Handle loading screen redirects
            if (href.includes('{{ route('loading-screen') }}?redirect=')) {
                href = href.split('redirect=')[1];
            }

            // Remove leading slash if present
            href = href.replace(/^\//, '');

            // Check if href matches current page or is included in current path
            return href === currentPage || currentPath.includes(href);
        }

        // Mark active top-level nav links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (isLinkActive(href)) {
                link.classList.add('active-page');

                // Highlight parent dropdown if exists
                const parentGroup = link.closest('.group');
                if (parentGroup) parentGroup.classList.add('active');
            }
        });

        // Mark active dropdown links
        const dropdownLinks = document.querySelectorAll(
            '#documentsDropdown a, #mediaDropdown a'
        );
        dropdownLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (isLinkActive(href)) {
                link.classList.add('active-page');

                // Highlight parent dropdown
                const parentGroup = link.closest('.group');
                if (parentGroup) {
                    parentGroup.classList.add('active');
                    const parentNavLink = parentGroup.querySelector('.nav-link');
                    if (parentNavLink) parentNavLink.classList.add('active-page');
                }
            }
        });

        // Debugging information
        console.log('Current Path:', currentPath);
        console.log('Current Page:', currentPage);
    });
</script>
