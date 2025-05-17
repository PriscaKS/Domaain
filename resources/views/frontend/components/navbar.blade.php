{{-- suggestion 3  --}}
<style>
    .active-page {
        color: var(--theme-color) !important;
        font-weight: bold;
        border-bottom: 2px solid var(--theme-color);
    }

    .group.active>.nav-link {
        color: var(--theme-color) !important;
    }
</style>

<!-- Navbar -->
<nav class="bg-[var(--nav-bg-color)] text-white px-5 py-3 flex justify-between items-center relative">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="flex items-center gap-2">
        <img src="{{ asset('assets/images/DPP-1-removebg-preview (2).png') }}" alt="Logo" class="h-14 w-auto md:h-20">
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-6 items-center ubuntu-regular">

        <li class="relative group">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
        </li>
        <li class="relative group">
            <a href="#" class="nav-link">Documents</a>
            <ul
                class="absolute left-0 hidden group-hover:block bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-2 z-50 w-[230px]">
                <li class="relative group/manifesto">
                    <a href="#"
                        class="block px-4 py-2 flex items-center justify-between hover:bg-[var(--theme-color)]"
                        id="manifestoToggle">
                        Manifesto <span
                            class="ml-1 transform group-hover/manifesto:rotate-180 transition-transform">▼</span>
                    </a>
                    <ul
                        class="absolute left-[calc(100%+0px)] top-0 hidden group-hover/manifesto:block bg-[var(--nav-bg-color)] text-white p-2 rounded-md shadow-lg space-y-2 z-50 w-48">
                        <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}"
                                class="block px-4 py-2 hover:bg-[var(--theme-color)]">2019 Manifesto</a></li>
                        <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2025') }}"
                                class="block px-4 py-2 hover:bg-[var(--theme-color)]">2025 Manifesto</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('policies') }}"
                        class="block px-4 py-2 hover:bg-[var(--theme-color)]">Party Policies & Ideology</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('code_of_conduct') }}"
                        class="block px-4 py-2 hover:bg-[var(--theme-color)]">Code of Conduct & Ethics</a></li>
            </ul>
        </li>
        <li><a href="{{ route('loading-screen') }}?redirect={{ route('membership') }}" class="nav-link">Become a
                Member</a></li>
        <li class="relative group">
            <a href="#" class="nav-link">Media</a>
            <ul
                class="absolute left-0 hidden group-hover:block bg-[var(--nav-bg-color)] text-white mt-0 p-2 rounded-md shadow-lg space-y-2 z-50 w-[150px]">
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block px-4 py-2">DPP
                        Music</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('events') }}"
                        class="block px-4 py-2">Event Gallery</a></li>
                <li><a href="{{ route('loading-screen') }}?redirect={{ route('news') }}" class="block px-4 py-2">DPP
                        News</a></li>
            </ul>
        </li>
        <li><a href="{{ route('contact') }}" class="nav-link">Contacts</a></li>
        <li class="nav-link flex-shrink-0">
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

    <!-- Mobile Menu (hidden by default) -->
    <ul id="mobile-menu"
        class="absolute top-full left-0 w-full bg-[var(--nav-bg-color)] text-white px-5 py-5 space-y-6 hidden md:hidden ubuntu-regular z-50 flex flex-col items-center justify-center min-h-[60vh]">
        <li><a href="{{ url('/') }}" class="nav-link block">Home</a></li>
        <li>
            <details>
                <summary class="cursor-pointer">Documents</summary>
                <ul class="ml-4 mt-2 space-y-2">
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2019') }}"
                            class="block">2019 Manifesto</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('manifesto2025') }}"
                            class="block">2025 Manifesto</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('policies') }}" class="block">Party
                            Policies & Ideology</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('code_of_conduct') }}"
                            class="block">Code of Conduct & Ethics</a></li>
                </ul>
            </details>
        </li>
        <li><a href="{{ route('loading-screen') }}?redirect={{ route('membership') }}" class="nav-link block">Become a
                Member</a></li>
        <li>
            <details>
                <summary class="cursor-pointer">Media</summary>
                <ul class="ml-4 mt-2 space-y-2">
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('music') }}" class="block">DPP
                            Music</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('events') }}" class="block">Event
                            Gallery</a></li>
                    <li><a href="{{ route('loading-screen') }}?redirect={{ route('news') }}" class="block">DPP
                            News</a></li>
                </ul>
            </details>
        </li>
        <li><a href="{{ route('contact') }}" class="nav-link block">Contacts</a></li>
        <li><a href="{{ route('loading-screen') }}?redirect={{ route('donate') }}"
                class="block bg-[var(--theme-color)] hover:bg-[var(--hover-theme-color)] text-white font-bold py-2 px-6 rounded-full text-center">Donate
                to Party</a></li>
    </ul>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const currentPage = currentPath.split('/').pop();

        function isLinkActive(href) {
            if (!href || href === '#') return false;
            if (href.includes('{{ route('loading-screen') }}?redirect=')) {
                href = href.split('redirect=')[1];
            }
            href = href.replace(/^\//, '');
            return href === currentPage || currentPath.includes(href);
        }

        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (isLinkActive(href)) {
                link.classList.add('active-page');
                const parentGroup = link.closest('.group');
                if (parentGroup) parentGroup.classList.add('active');
            }
        });




        // Mobile menu toggle
        const toggleBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        toggleBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
