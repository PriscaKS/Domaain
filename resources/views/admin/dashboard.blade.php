<!-- admin/dashboard.blade.php -->

@extends('layouts.admin')

@section('title', 'DPP | Admin Dashboard')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800  dark:bg-gray-900 dark:text-white">Admin / Dashboard</h1>
        <p class="text-gray-600">Welcome back! </p>
    </div>
    <div class="p-6 text-center transition-colors duration-300 bg-white text-black dark:bg-gray-800 dark:text-white">
        <p class="text-xl font-bold">Dark Mode Test Block</p>
    </div>

    @include('frontend.commons.alerts')
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                    <i class="fas fa-users"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Members</p>
                    <p class="text-xl font-semibold text-gray-800">2,461</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm font-medium flex items-center">
                        <i class="fas fa-arrow-up mr-1"></i> 12.5%
                    </span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-pink-100 text-pink-600">
                    <i class="fas fa-money-bill"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Transactions</p>
                    <p class="text-xl font-semibold text-gray-800">$6,389</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm font-medium flex items-center">
                        <i class="fas fa-arrow-up mr-1"></i> 8.2%
                    </span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">News Published</p>
                    <p class="text-xl font-semibold text-gray-800">{{ $newsCount }}</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm font-medium flex items-center">
                        <i class="fas fa-arrow-up mr-1"></i> 4.8%
                    </span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">New Inquiries</p>
                    <p class="text-xl font-semibold text-gray-800">38</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-red-500 text-sm font-medium flex items-center">
                        <i class="fas fa-arrow-down mr-1"></i> 3.2%
                    </span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart & Activity Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow col-span-2 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800">Member Growth</h3>
                <div class="flex items-center">
                    <select class="text-sm border-0 focus:ring-0 text-gray-600 pr-8" id="chart-period">
                        <option>Last 7 days</option>
                        <option>Last 30 days</option>
                        <option>Last 90 days</option>
                    </select>
                </div>
            </div>
            <div>
                <canvas id="memberChart" height="300"></canvas>
            </div>
        </div>


        {{-- <p class="text-sm font-medium {{ $colorClass }}">{{ $activity->title }}</p> --}}


        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800 ">Recent Activity</h3>
                <a href="{{ route('admin.activity') }}" class="text-indigo-600 text-sm hover:text-indigo-800">View all</a>
            </div>

            <div class="space-y-4">
                @foreach ($activities as $activity)
                        <div class="flex">

                            <div class="ml-4">
                                {{-- <p class="text-sm font-medium {{ $colorClass }}">{{ $activity->title }}</p> --}}
                                <p class="text-sm font-medium 
                                {{ $activity->type === 'create'
                    ? 'text-green-800'
                    : ($activity->type === 'update'
                        ? 'text-blue-800'

                        : ($activity->type === 'delete'
                            ? 'text-red-800'
                            : ($activity->type === 'logout'
                                ? 'text-pink-800'
                                : 'text-gray-700'))) }}">
                                    {{ $activity->title }}
                                </p>

                                <p class="text-xs text-gray-500">{{ $activity->description }}</p>
                                <p class="text-xs text-gray-400 mt-1">{{ $activity->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>

    </div>

    <!-- Email Inquiries Section -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Recent Email Inquiries</h3>
            <a href="{{ route('admin.emails') }}" class="text-indigo-600 text-sm hover:text-indigo-800">View all</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sender
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">Thomas Anderson</p>
                                    <p class="text-xs text-gray-500">thomas@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Question about membership</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                                Unread
                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 15, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
                            <a href="#" class="text-gray-600 hover:text-gray-900">Reply</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">Lisa Roberts</p>
                                    <p class="text-xs text-gray-500">lisa@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Donation</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                Flagged
                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 14, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
                            <a href="#" class="text-gray-600 hover:text-gray-900">Reply</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">Mark Davis</p>
                                    <p class="text-xs text-gray-500">mark@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Event coordination</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                Responded
                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 13, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
                            <a href="#" class="text-gray-600 hover:text-gray-900">Reply</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">Karen Wilson</p>
                                    <p class="text-xs text-gray-500">karen@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Committee application</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                Resolved
                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 12, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
                            <a href="#" class="text-gray-600 hover:text-gray-900">Reply</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Initialize chart
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('memberChart').getContext('2d');
            const memberChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'New Members',
                        data: [65, 78, 90, 115, 137, 159, 180],
                        backgroundColor: 'rgba(79, 70, 229, 0.1)',
                        borderColor: '#4F46E5',
                        borderWidth: 2,
                        tension: 0.4,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#4F46E5',
                        pointRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: true,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

            // Handle chart period change
            document.getElementById('chart-period').addEventListener('change', function (e) {
                let newData;
                switch (e.target.value) {
                    case 'Last 7 days':
                    case 'Last 7 days':
                        newData = [165, 172, 175, 178, 182, 185, 190];
                        memberChart.data.labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                        break;
                    case 'Last 30 days':
                        newData = [130, 135, 142, 150, 158, 165, 172, 178, 183, 188, 192, 198, 204, 210,
                            215, 220, 224, 228, 232, 238, 244, 250, 255, 260, 264, 268, 272, 276, 280,
                            285
                        ];
                        memberChart.data.labels = Array.from({
                            length: 30
                        }, (_, i) => `Day ${i + 1}`);
                        break;
                    case 'Last 90 days':
                        newData = [65, 78, 90, 115, 137, 159, 180, 198, 215, 230, 245, 260];
                        memberChart.data.labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',
                            'Sep', 'Oct', 'Nov', 'Dec'
                        ];
                        break;
                }
                memberChart.data.datasets[0].data = newData;
                memberChart.update();
            });
        });

        // Initialize notifications
        function initNotifications() {
            const notificationBell = document.getElementById('notification-bell');
            if (notificationBell) {
                notificationBell.addEventListener('click', function () {
                    const notificationPanel = document.getElementById('notification-panel');
                    notificationPanel.classList.toggle('hidden');
                });
            }
        }

        // Initialize datatable for inquiries
        function initDataTable() {
            if (typeof $.fn.dataTable !== 'undefined') {
                $('.datatable').DataTable({
                    responsive: true,
                    pageLength: 10,
                    language: {
                        search: "",
                        searchPlaceholder: "Search..."
                    }
                });
            }
        }

        // Handle sidebar toggle for mobile
        function initSidebar() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.getElementById('sidebar');

            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', function () {
                    sidebar.classList.toggle('-translate-x-full');
                });
            }
        }

        // Initialize quick actions
        function initQuickActions() {
            const quickActionButtons = document.querySelectorAll('.quick-action-btn');

            //     quickActionButtons.forEach(button => {
            //         button.addEventListener('click', function () {
            //             const action = this.getAttribute('data-action');

            //             { { -- switch (action) { --} }
            //             { { --    case 'create-post': --} }
            //             { { --window.location.href = "{{ route('welcome') }}"; --} }
            //             { { --        break; --} }
            //             { { --    case 'add-member': --} }
            //             { { --window.location.href = "{{ route('welcome') }}"; --} }
            //             { { --        break; --} }
            //             { { --    case 'create-event': --} }
            //             { { --window.location.href = "{{ route('welcome') }}"; --} }
            //             { { --        break; --} }
            //             { { --    case 'view-reports': --} }
            //             { { --window.location.href = "{{ route('welcome') }}"; --} }
            //             { { --        break; --} }
            //             { { -- } --}
            //         }
            //             });
            // });
        }

        // Call all initialization functions
        document.addEventListener('DOMContentLoaded', function () {
            initNotifications();
            initDataTable();
            initSidebar();
            initQuickActions();
        });
    </script>
@endsection