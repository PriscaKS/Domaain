<!-- admin/enquiries.blade.php -->
@extends('layouts.admin')

@section('title', 'DPP Admin Dashboard')

@section('content')

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Recent Email Inquiries</h3>
            <a href="#" class="text-indigo-600 text-sm hover:text-indigo-800">View all</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sender</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
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
                        <button class="text-indigo-600 hover:text-indigo-900 mr-3">View</button>
                        <button class="text-gray-600 hover:text-gray-900">Reply</button>
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
                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Donation confirmation</td>
                    <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                        Flagged
                                    </span>
                    </td>

                    <!-- Continue Email Inquiries Section Table -->
                    <table class="min-w-full">
                        <tbody class="divide-y divide-gray-200">
                        <!-- Previous row -->
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
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-800">Donation confirmation</td>
                            <td class="px-4 py-3 whitespace-nowrap">
                                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                                    Flagged
                                                </span>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Apr 14, 2025</td>
                            <td class="px-4 py-3 whitespace-nowrap text-right text-sm">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">View</button>
                                <button class="text-gray-600 hover:text-gray-900">Reply</button>
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
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">View</button>
                                <button class="text-gray-600 hover:text-gray-900">Reply</button>
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
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">View</button>
                                <button class="text-gray-600 hover:text-gray-900">Reply</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>



@endsection
