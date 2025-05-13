<!-- layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DPP Admin')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <style>
        .sidebar-active {
            border-left: 4px solid #4F46E5;
            background-color: rgba(79, 70, 229, 0.1);
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
</head>

<body class="bg-gray-50 h-screen flex overflow-hidden">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar bg-white w-64 shadow-lg h-full flex flex-col">
        <div class="p-5 border-b border-gray-100">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div
                        class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold">
                        D
                    </div>
                    <h1 class="ml-3 text-xl font-bold text-gray-800">DPP Admin</h1>
                </div>
                <button id="sidebar-toggle" class="md:hidden text-gray-500 hover:text-gray-800">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <div class="flex-1 overflow-y-auto p-4">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">
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
                <img src="{{ asset('images/admin-avatar.jpg') }}" alt="Admin Avatar" class="w-10 h-10 rounded-full">
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
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="flex items-center">
                    <button class="relative p-2 text-gray-500 hover:text-gray-700 mr-3">
                        <i class="fas fa-bell"></i>
                        <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>

                    <button class="relative p-2 text-gray-500 hover:text-gray-700 mr-3">
                        <i class="fas fa-envelope"></i>
                        <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>

                    <div class="border-l border-gray-300 h-6 mx-3"></div>

                    <div class="relative">
                        <button class="flex items-center focus:outline-none">
                            <img src="{{ asset('images/admin-avatar.jpg') }}" alt="User"
                                class="h-8 w-8 rounded-full">
                            <span
                                class="ml-2 text-sm font-medium text-gray-700 hidden md:block">{{ auth()->user()->name ?? 'Admin User' }}</span>
                            <i class="fas fa-chevron-down ml-1 text-xs text-gray-500 hidden md:block"></i>
                        </button>
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

    <!-- Custom JavaScript -->
    <script>
        // Toggle sidebar on mobile
        document.getElementById('mobile-toggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('mobile-toggle');

            if (window.innerWidth <= 768 && !sidebar.contains(event.target) && event.target !== toggleBtn) {
                sidebar.classList.add('collapsed');
            }
        });

        // File upload preview functionality
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

</body>

</html>
