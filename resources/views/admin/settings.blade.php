<!-- admin/settings.blade.php -->
@extends('layouts.admin')
@section('title', 'DPP Admin Dashboard')
@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Settings</h1>

            <div class="mt-6 bg-white shadow overflow-hidden sm:rounded-lg">
                <!-- Settings Navigation Tabs -->
                <div class="border-b border-gray-200">
                    <nav class="flex -mb-px">
                        <a href="#"
                            class="border-indigo-500 text-indigo-600 whitespace-nowrap py-4 px-6 border-b-2 font-medium text-sm">
                            General
                        </a>
                        <a href="#"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-6 border-b-2 font-medium text-sm">
                            Security
                        </a>
                        <a href="#"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-6 border-b-2 font-medium text-sm">
                            Notifications
                        </a>
                        <a href="#"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-6 border-b-2 font-medium text-sm">
                            API
                        </a>
                        <a href="#"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-6 border-b-2 font-medium text-sm">
                            Integrations
                        </a>
                    </nav>
                </div>

                <!-- General Settings Section -->
                <div class="px-4 py-5 sm:p-6">
                    <div class="space-y-6">
                        <!-- Profile Settings -->
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
                            <div class="mt-5 md:flex md:items-center">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <img class="h-16 w-16 rounded-full" src="/api/placeholder/150/150"
                                            alt="Profile Image">
                                        <span
                                            class="absolute bottom-0 right-0 block h-4 w-4 rounded-full ring-2 ring-white bg-green-400"></span>
                                    </div>
                                </div>
                                <div class="mt-4 md:mt-0 md:ml-6">
                                    <div class="text-sm font-medium text-gray-900">Upload a new photo</div>
                                    <div class="mt-1 flex">
                                        <button type="button"
                                            class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Change
                                        </button>
                                        <button type="button"
                                            class="ml-3 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="border-t border-gray-200 pt-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
                            <p class="mt-1 text-sm text-gray-500">Update your account's profile information and email
                                address.</p>

                            <form class="mt-6 space-y-6">
                                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                            name</label>
                                        <div class="mt-1">
                                            <input type="text" name="first_name" id="first_name"
                                                autocomplete="given-name"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last
                                            name</label>
                                        <div class="mt-1">
                                            <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email
                                            address</label>
                                        <div class="mt-1">
                                            <input id="email" name="email" type="email" autocomplete="email"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone
                                            number</label>
                                        <div class="mt-1">
                                            <input type="text" name="phone" id="phone" autocomplete="tel"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- System Settings -->
                        <div class="border-t border-gray-200 pt-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">System Settings</h3>
                            <p class="mt-1 text-sm text-gray-500">Manage system-wide settings and preferences.</p>

                            <div class="mt-6">
                                <div class="space-y-4">
                                    <!-- Timezone Setting -->
                                    <div class="flex items-start">
                                        <div class="flex-1 min-w-0">
                                            <label for="timezone"
                                                class="block text-sm font-medium text-gray-700">Timezone</label>
                                            <div class="mt-1">
                                                <select id="timezone" name="timezone"
                                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                    <option>Pacific Standard Time (UTC-8)</option>
                                                    <option>Eastern Standard Time (UTC-5)</option>
                                                    <option>Central European Time (UTC+1)</option>
                                                    <option>Japan Standard Time (UTC+9)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Language Setting -->
                                    <div class="flex items-start">
                                        <div class="flex-1 min-w-0">
                                            <label for="language"
                                                class="block text-sm font-medium text-gray-700">Language</label>
                                            <div class="mt-1">
                                                <select id="language" name="language"
                                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                    <option>English</option>
                                                    <option>Spanish</option>
                                                    <option>French</option>
                                                    <option>German</option>
                                                    <option>Japanese</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Theme Setting -->
                                    <div class="flex items-start">
                                        <div class="flex-1 min-w-0">
                                            <fieldset>
                                                <legend class="text-sm font-medium text-gray-700">Theme</legend>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-center">
                                                        <input id="theme-system" name="theme" type="radio" checked
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="theme-system"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            System default
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="theme-light" name="theme" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="theme-light"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Light
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="theme-dark" name="theme" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="theme-dark"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Dark
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="border-t border-gray-200 pt-6 flex justify-end">
                            <button type="button"
                                class="bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @extends('layouts.admin')

@section('title', 'DPP Admin Dashboard')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Settings</h1>

    <form method="POST" action="#" class="space-y-10">
        @csrf

        <!-- ACCOUNT SECTION -->
        <div class="bg-white shadow rounded-xl p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Account Settings</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-600">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}"
                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>
            </div>
        </div>

        <!-- SECURITY SECTION -->
        <div class="bg-white shadow rounded-xl p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Security</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-600">New Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600">Confirm New Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>
            </div>
        </div>

        <!-- PREFERENCES SECTION -->
        <div class="bg-white shadow rounded-xl p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Preferences</h2>

            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <label for="dark_mode" class="text-sm font-medium text-gray-600">Enable Dark Mode</label>
                    <input type="checkbox" id="dark_mode" name="dark_mode" class="h-4 w-4 text-blue-600">
                </div>

                <div class="flex items-center space-x-4">
                    <label for="notifications" class="text-sm font-medium text-gray-600">Email Notifications</label>
                    <input type="checkbox" id="notifications" name="notifications" class="h-4 w-4 text-blue-600">
                </div>
            </div>
        </div>

        <div class="text-right">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow">
                Save Settings
            </button>
        </div>
    </form>
</div>
@endsection --}}
