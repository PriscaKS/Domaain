<!-- admin/uploads.blade.php -->
@extends('layouts.admin')

@section('title', 'DPP Dashboard | uploads')

@section('content')

    <div id="upload-center-content" class="mt-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6">Upload Center</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Image Upload Section -->
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data"
                class="bg-white rounded-lg shadow p-6">
                @csrf
                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Upload Image</label>
                    <input type="file" name="image" required class="mt-2 p-2 w-full border rounded">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Category</label>
                    <select name="category" required class="mt-2 p-2 w-full border rounded">
                        <option value="Leaders">Leaders</option>
                        <option value="Events">Events</option>
                        <option value="Committee">Committee</option>
                        <option value="Campaigns">Campaigns</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Title (optional)</label>
                    <input type="text" name="title" class="mt-2 p-2 w-full border rounded">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Description (optional)</label>
                    <textarea name="description" rows="3" class="mt-2 p-2 w-full border rounded"></textarea>
                </div>

                <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700">Upload</button>
            </form>

            

            <!-- News Upload Section -->
            <div class="max-w-3xl mx-auto ">
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- News Upload Section -->
                    <div class="bg-white rounded-lg shadow p-5">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-newspaper text-green-600"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 ml-3">Publish News</h3>
                        </div>

                        <p class="text-gray-600 text-sm mb-4">Create and publish news articles, announcements, and updates.
                        </p>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">News Title</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                                placeholder="Enter news title" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                            <select name="category"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                                required>
                                <option value="">-- Select Category --</option>
                                <option value="Announcements">Announcements</option>
                                <option value="Policy Updates">Policy Updates</option>
                                <option value="Events">Events</option>
                                <option value="Press Releases">Press Releases</option>
                                <option value="Statements">Statements</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                            <textarea name="content" rows="5"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                                placeholder="Write news content..." required>{{ old('content') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label>
                            <input type="file" name="featured_image"
                                class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-sm file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100" />
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" name="is_published" value="0"
                                class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg text-sm font-medium hover:bg-gray-300 mr-2">
                                Save Draft
                            </button>
                            <button type="submit" name="is_published" value="1"
                                class="px-4 py-2 bg-green-600 text-white rounded-lg text-sm font-medium hover:bg-green-700">
                                Publish
                            </button>
                        </div>
                    </div>
                </form>
            </div>


            <!-- Music Upload Section -->
            <form action="{{ route('music.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white rounded-lg shadow p-5">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                            <i class="fas fa-music text-purple-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 ml-3">Upload Music</h3>
                    </div>

                    <p class="text-gray-600 text-sm mb-4">Upload campaign songs, theme music, and audio content.</p>

                    <div
                        class="upload-area border-2 border-dashed border-purple-300 rounded-lg p-6 text-center hover:bg-purple-50 transition-colors cursor-pointer">
                        <i class="fas fa-music text-3xl text-purple-500 mb-3"></i>
                        <p class="text-sm font-medium text-gray-700">Drag & drop audio files here</p>
                        <p class="text-xs text-gray-500 mt-1">or</p>

                        <input type="file" name="file" accept=".mp3,.wav,.ogg" required
                            class="mt-3 mx-auto block text-sm text-gray-600">

                        <p class="text-xs text-gray-500 mt-3">Maximum file size: 20MB</p>
                        <p class="text-xs text-gray-500">Supported formats: MP3, WAV, OGG</p>
                    </div>

                    <div class="mt-5">
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Music Details</h4>

                        <div class="mb-3">
                            <label class="block text-xs text-gray-600 mb-1">Title</label>
                            <input type="text" name="title" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                                placeholder="Enter title">
                        </div>

                        <div class="mb-3">
                            <label class="block text-xs text-gray-600 mb-1">Artist</label>
                            <input type="text" name="artist" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                                placeholder="Enter artist name">
                        </div>

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">Category</label>
                            <select name="category" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                                <option value="Campaign Song">Campaign Song</option>
                                <option value="Theme Music">Theme Music</option>
                                <option value="Jingle">Jingle</option>
                                <option value="Speech Audio">Speech Audio</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-5 text-right">
                        <button type="submit"
                            class="px-6 py-2 bg-purple-600 text-white rounded-lg text-sm font-medium hover:bg-purple-700 transition-colors">
                            Upload Music
                        </button>
                    </div>
                </div>
            </form>

            {{-- <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center mb-4">
                    <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                        <i class="fas fa-music text-purple-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 ml-3">Upload Music</h3>
                </div>

                <p class="text-gray-600 text-sm mb-4">Upload campaign songs, theme music, and audio content.</p>

                <div
                    class="upload-area border-2 border-dashed border-purple-300 rounded-lg p-6 text-center hover:bg-purple-50 transition-colors cursor-pointer">
                    <i class="fas fa-music text-3xl text-purple-500 mb-3"></i>
                    <p class="text-sm font-medium text-gray-700">Drag & drop audio files here</p>
                    <p class="text-xs text-gray-500 mt-1">or</p>
                    <button
                        class="mt-3 px-4 py-2 bg-purple-600 text-white rounded-lg text-sm font-medium hover:bg-purple-700 transition-colors">
                        Browse Files
                    </button>
                    <p class="text-xs text-gray-500 mt-3">Maximum file size: 20MB</p>
                    <p class="text-xs text-gray-500">Supported formats: MP3, WAV, OGG</p>
                </div>

                <div class="mt-5">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Music Details</h4>

                    <div class="mb-3">
                        <label class="block text-xs text-gray-600 mb-1">Title</label>
                        <input type="text"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                            placeholder="Enter title">
                    </div>

                    <div class="mb-3">
                        <label class="block text-xs text-gray-600 mb-1">Artist</label>
                        <input type="text"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                            placeholder="Enter artist name">
                    </div>

                    <div>
                        <label class="block text-xs text-gray-600 mb-1">Category</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                            <option>Campaign Song</option>
                            <option>Theme Music</option>
                            <option>Jingle</option>
                            <option>Speech Audio</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
