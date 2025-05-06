<!-- admin/uploads.blade.php -->
@extends('layouts.admin')

@section('title', 'DPP Admin Dashboard')

@section('content')

    <div id="upload-center-content" class="mt-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6">Upload Center</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Image Upload Section -->
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center mb-4">
                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                        <i class="fas fa-image text-indigo-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 ml-3">Upload Images</h3>
                </div>

                <p class="text-gray-600 text-sm mb-4">Upload images for committee members, events, and other DPP content.</p>

                <div class="upload-area border-2 border-dashed border-indigo-300 rounded-lg p-6 text-center hover:bg-indigo-50 transition-colors cursor-pointer">
                    <i class="fas fa-cloud-upload-alt text-3xl text-indigo-500 mb-3"></i>
                    <p class="text-sm font-medium text-gray-700">Drag & drop files here</p>
                    <p class="text-xs text-gray-500 mt-1">or</p>
                    <button class="mt-3 px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-medium hover:bg-indigo-700 transition-colors">
                        Browse Files
                    </button>
                    <p class="text-xs text-gray-500 mt-3">Maximum file size: 10MB</p>
                    <p class="text-xs text-gray-500">Supported formats: JPG, PNG, GIF</p>
                </div>

                <div class="mt-5">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Image Categories</h4>
                    <div class="flex flex-wrap gap-2">
                                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium hover:bg-gray-200 cursor-pointer">
                                                        Committee
                                                    </span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium hover:bg-gray-200 cursor-pointer">
                                                        Events
                                                    </span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium hover:bg-gray-200 cursor-pointer">
                                                        Leaders
                                                    </span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium hover:bg-gray-200 cursor-pointer">
                                                        Campaigns
                                                    </span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium hover:bg-gray-200 cursor-pointer">
                                                        + Add New
                                                    </span>
                    </div>
                </div>
            </div>

            <!-- News Upload Section -->
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center mb-4">
                    <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                        <i class="fas fa-newspaper text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 ml-3">Publish News</h3>
                </div>

                <p class="text-gray-600 text-sm mb-4">Create and publish news articles, announcements, and updates.</p>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">News Title</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Enter news title">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option>Announcements</option>
                        <option>Policy Updates</option>
                        <option>Events</option>
                        <option>Press Releases</option>
                        <option>Statements</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" rows="5" placeholder="Write news content..."></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label>
                    <div class="flex items-center">
                        <button class="px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-gray-700 text-sm hover:bg-gray-200">
                            <i class="fas fa-image mr-1"></i> Choose Image
                        </button>
                        <p class="text-xs text-gray-500 ml-3">No file chosen</p>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg text-sm font-medium hover:bg-gray-300 mr-2">
                        Save Draft
                    </button>
                    <button class="px-4 py-2 bg-green-600 text-white rounded-lg text-sm font-medium hover:bg-green-700">
                        Publish
                    </button>
                </div>
            </div>

            <!-- Music Upload Section -->
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center mb-4">
                    <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                        <i class="fas fa-music text-purple-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 ml-3">Upload Music</h3>
                </div>

                <p class="text-gray-600 text-sm mb-4">Upload campaign songs, theme music, and audio content.</p>

                <div class="upload-area border-2 border-dashed border-purple-300 rounded-lg p-6 text-center hover:bg-purple-50 transition-colors cursor-pointer">
                    <i class="fas fa-music text-3xl text-purple-500 mb-3"></i>
                    <p class="text-sm font-medium text-gray-700">Drag & drop audio files here</p>
                    <p class="text-xs text-gray-500 mt-1">or</p>
                    <button class="mt-3 px-4 py-2 bg-purple-600 text-white rounded-lg text-sm font-medium hover:bg-purple-700 transition-colors">
                        Browse Files
                    </button>
                    <p class="text-xs text-gray-500 mt-3">Maximum file size: 20MB</p>
                    <p class="text-xs text-gray-500">Supported formats: MP3, WAV, OGG</p>
                </div>

                <div class="mt-5">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Music Details</h4>

                    <div class="mb-3">
                        <label class="block text-xs text-gray-600 mb-1">Title</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500" placeholder="Enter title">
                    </div>

                    <div class="mb-3">
                        <label class="block text-xs text-gray-600 mb-1">Artist</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500" placeholder="Enter artist name">
                    </div>

                    <div>
                        <label class="block text-xs text-gray-600 mb-1">Category</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                            <option>Campaign Song</option>
                            <option>Theme Music</option>
                            <option>Jingle</option>
                            <option>Speech Audio</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
