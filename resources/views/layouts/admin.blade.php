<!-- layouts/admin.blade.php -->
<!DOCTYPE html>
{{-- <html lang="en" class="{{ session('theme') === 'dark' ? 'dark' : '' }}"> --}}
<html lang="en" id="html-root">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DPP Admin')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

    <style>
        .sidebar-active {
            border-left: 4px solid #341397;
            background-color: rgba(18, 12, 135, 0.1);
        }

        .upload-area {
            border: 2px dashed #4F46E5;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .upload-area:hover {
            border-color: #6366F1;
            background-color: rgba(99, 102, 241, 0.05);
        }

        .sidebar {
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .sidebar.collapsed {
                width: 0;
                overflow: hidden;
                padding: 0;
            }
        }
    </style>
    @yield('styles')
    <link rel="icon" type="image/png" href="/favicon.png">


    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


</head>

<body class="bg-gray-50 h-screen flex overflow-hidden "
    style="font-family: 'Ubuntu', sans-serif;">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar bg-white w-64 shadow-lg h-full flex flex-col dark:bg-gray-900 dark:text-white">
        <div class="p-5 border-b border-gray-100 border-gray-100 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div
                        class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold">
                        D
                    </div>
                    <h1 class="ml-3 text-xl font-bold text-gray-800">DPP Admin</h1>
                </div>

            </div>
        </div>

        <div class="flex-1 overflow-y-auto p-4">
            <p class="text-xs font-semibold text-gray-400 dark:text-gray-300 uppercase tracking-wider mb-4">
    Main
</p>

            <a href="{{ route('admin.dashboard') }}"
                class="@if (request()->routeIs('admin.dashboard')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('admin.dashboard')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2 font-medium">
                <i class="fas fa-th-large w-5 h-5 mr-3"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.uploads') }}"
                class="@if (request()->routeIs('admin.uploads')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('admin.uploads')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-upload w-5 h-5 mr-3"></i>
                <span>Upload Center</span>
            </a>

            <a href="{{ route('news.index') }}"
                class="@if (request()->routeIs('news.*')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('news.*')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-newspaper w-5 h-5 mr-3"></i>
                <span>News Management</span>
            </a>


            <a href="{{ route('music.index') }}"
                class="@if (request()->routeIs('music.index')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('music.index')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-music w-5 h-5 mr-3"></i>
                <span>Music Library</span>
            </a>

            <a href="{{ route('admin.transactions') }}"
                class="@if (request()->routeIs('admin.transactions')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('admin.transactions')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-money-bill-wave w-5 h-5 mr-3"></i>
                <span>Transactions</span>
            </a>

            <a href="{{ route('admin.emails') }}"
                class="@if (request()->routeIs('admin.emails')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('admin.emails')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-envelope w-5 h-5 mr-3"></i>
                <span>Email Inquiries</span>
            </a>

            {{-- events --}}

            <a href="{{ route('events.index') }}"
                class="@if (request()->routeIs('events.index')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('events.index')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-calendar w-5 h-5 mr-3"></i>
                <span>Events</span>
            </a>
            {{-- images --}}
            <a href="{{ route('images.index') }}"
                class="@if (request()->routeIs('images.index')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('images.index')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-image w-5 h-5 mr-3"></i>
                <span>Images Library</span>
            </a>

            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mt-6 mb-4">
                Settings
            </p>

            <a href="{{ route('profile.edit') }}"
                class="@if (request()->routeIs('profile.edit')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('admin.profile')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-user-circle w-5 h-5 mr-3"></i>
                <span>Profile</span>
            </a>

            <a href="{{ route('admin.settings') }}"
                class="@if (request()->routeIs('admin.settings')) sidebar-active @endif flex items-center py-2 px-3 rounded-lg @if (request()->routeIs('admin.settings')) text-indigo-600 @else text-gray-600 hover:bg-gray-50 @endif mb-2">
                <i class="fas fa-cog w-5 h-5 mr-3"></i>
                <span>Settings</span>
            </a>
        </div>

        <div class="p-4 border-t border-gray-100">
            <div class="flex items-center">
                <img src="{{ asset('admin-avatar.jpg') }}" alt="Admin Avatar" class="w-10 h-10 rounded-full">
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name ?? 'Admin User' }}</p>
                    <p class="text-xs text-gray-500">{{ auth()->user()->email ?? 'admin@dpp.org' }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="ml-auto">
                    @csrf
                    <button type="submit" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Nav -->
        <header class="bg-white shadow-sm z-10">
            <div class="flex items-center justify-between h-16 px-6">
                <button id="mobile-toggle" class="md:hidden text-gray-500 hover:text-gray-700">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="ml-4 md:ml-0 relative w-full max-w-md hidden md:block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-search text-gray-400"></i>
                    </span>
                    <input type="text" placeholder="Search..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-red-700">
                </div>

                <div class="flex items-center">
                    {{-- theme --}}
    <button id="theme-toggle" class="p-2 text-xl">
  <span class="block dark:hidden">
    <i class="fas fa-moon"></i> <!-- Show in light mode -->
  </span>
  <span class="hidden dark:block">
    <i class="fas fa-sun"></i> <!-- Show in dark mode -->
  </span>
</button>

                    {{-- end theme  --}}

                    <button class="relative p-2 text-gray-500 hover:text-gray-700 mr-3">
                        <i class="fas fa-bell"></i>
                        <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>



                    <button class="relative p-2 text-gray-500 hover:text-gray-700 mr-3">
                        <i class="fas fa-envelope"></i>
                        <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>

                    <div class="border-l border-gray-300 h-6 mx-3"></div>


                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <img src="{{ asset('admin-avatar.jpg') }}" alt="User" class="h-8 w-8 rounded-full">
                        <x-dropdown align="right" width="48">

                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('admin.settings')">
                                    {{ __('settings') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
            @yield('content')
        </main>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

   
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        }

        // Use only the header button
        const mobileToggle = document.getElementById('mobile-toggle');
        mobileToggle?.addEventListener('click', toggleSidebar);

        // Optional: Close sidebar when clicking outside (only on mobile)
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');

            if (
                window.innerWidth <= 768 &&
                !sidebar.contains(event.target) &&
                !mobileToggle.contains(event.target)
            ) {
                sidebar.classList.add('collapsed');
            }
        });

        // File upload name display
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function(e) {
                const fileName = e.target.files[0]?.name || 'No file chosen';
                const nextElement = input.nextElementSibling;
                if (nextElement && nextElement.classList.contains('text-gray-500')) {
                    nextElement.textContent = fileName;
                }
            });
        });
    </script>


@yield('scripts')
<script src="//unpkg.com/alpinejs" defer></script>
@vite('resources/js/theme.js')

</body>

</html>
