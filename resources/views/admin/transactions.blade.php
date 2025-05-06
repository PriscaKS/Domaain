<!-- admin/transactions.blade.php -->
@extends('layouts.admin')

@section('title', 'DPP Admin Dashboard')

@section('content')


    <!-- Transaction Management Tab -->
    <div id="transaction-management" class="mt-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-gray-800">Transaction Management</h2>

            <div class="flex items-center">
                <div class="relative mr-3">
                    <input type="text" placeholder="Search transactions..." class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                    <i class="fas fa-search text-gray-400"></i>
                                                </span>
                </div>

                <select class="px-3 py-2 border border-gray-300 rounded-lg text-gray-700 mr-3">
                    <option>All Status</option>
                    <option>Completed</option>
                    <option>Pending</option>
                    <option>Failed</option>
                    <option>Refunded</option>
                </select>

                <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-medium hover:bg-indigo-700">
                    Export CSV
                </button>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center">
                                Transaction ID
                                <i class="fas fa-sort ml-1"></i>
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center">
                                Customer
                                <i class="fas fa-sort ml-1"></i>
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center">
                                Amount
                                <i class="fas fa-sort ml-1"></i>
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center">
                                Payment Method
                                <i class="fas fa-sort ml-1"></i>
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center">
                                Status
                                <i class="fas fa-sort ml-1"></i>
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center">
                                Date
                                <i class="fas fa-sort ml-1"></i>
                            </div>
                        </th>
                        <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">#TRX-14598</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">John Smith</p>
                                    <p class="text-xs text-gray-500">john.s@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">$250.00</td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Credit Card</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                                                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                                                Completed
                                                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 14, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <button class="text-indigo-600 hover:text-indigo-900 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900 mr-3">
                                <i class="fas fa-receipt"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">#TRX-14597</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">Sarah Johnson</p>
                                    <p class="text-xs text-gray-500">sarahj@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">$100.00</td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">PayPal</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                                                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                                                Completed
                                                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 13, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <button class="text-indigo-600 hover:text-indigo-900 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900 mr-3">
                                <i class="fas fa-receipt"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">#TRX-14596</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">Michael Brown</p>
                                    <p class="text-xs text-gray-500">michael@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">$175.00</td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Bank Transfer</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                                                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                                                Pending
                                                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 12, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <button class="text-indigo-600 hover:text-indigo-900 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900 mr-3">
                                <i class="fas fa-receipt"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">#TRX-14595</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">Emma Wilson</p>
                                    <p class="text-xs text-gray-500">emma@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">$500.00</td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Credit Card</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                                                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                                                Completed
                                                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 11, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <button class="text-indigo-600 hover:text-indigo-900 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900 mr-3">
                                <i class="fas fa-receipt"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">#TRX-14594</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-200"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800">David Chen</p>
                                    <p class="text-xs text-gray-500">david@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">$150.00</td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Mobile Payment</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                                                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                                                                Failed
                                                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 10, 2025</td>
                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                            <button class="text-indigo-600 hover:text-indigo-900 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900 mr-3">
                                <i class="fas fa-receipt"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-white px-4 py-3 border-t border-gray-200 flex items-center justify-between">
                <div class="flex-1 flex justify-between sm:hidden">
                    <button class="px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Previous
                    </button>
                    <button class="ml-3 px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Next
                    </button>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">24</span> results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="relative inline-flex items-center px-4 py-2 border border-indigo-500 bg-indigo-50 text-sm font-medium text-indigo-600 hover:bg-indigo-100">
                                1
                            </button>
                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                2
                            </button>

                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                            ...
                        </span>
                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                5
                            </button>
                            <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </nav>
                    </div>
                </div>
@endsection
