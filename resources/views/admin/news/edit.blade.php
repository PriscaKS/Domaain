<!-- admin/news/edit.blade.php -->
@extends('layouts.admin')

@section('title', 'Edit News Article')

@section('styles')
    <!-- Include any CSS needed for the editor -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        .note-editor .dropdown-toggle::after {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="max-w-6xl mx-auto mt-10">
        <div class="mb-6">
            <a href="{{ route('news.index') }}" class="flex items-center text-blue-600 hover:text-blue-800 transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to News List
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Edit News Article</h2>
                <div class="mt-2 md:mt-0 flex space-x-2">
                    <a href="{{ route('news.show', $news->id) }}"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                        <i class="fas fa-eye mr-1"></i> View Article
                    </a>
                </div>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-red-400"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Please fix the following errors:</h3>
                            <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Edit Form -->
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Title -->
                    <div class="col-span-2">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span
                                class="text-red-600">*</span></label>
                        <input type="text" name="title" id="title" value="{{ old('title', $news->title) }}"
                            required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category <span
                                class="text-red-600">*</span></label>
                        <select name="category" id="category" required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            <option value="">Select Category</option>
                            @foreach (['News', 'Events', 'Announcements', 'Press Release'] as $category)
                                <option value="{{ $category }}"
                                    {{ old('category', $news->category) == $category ? 'selected' : '' }}>
                                    {{ $category }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Author -->
                    <div>
                        <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Author</label>
                        <input type="text" name="author" id="author" value="{{ old('author', $news->author) }}"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>

                    <!-- Current Image Preview -->
                    @if ($news->featured_image)
                        <div class="col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Current Featured Image</label>
                            <div class="mt-1 flex items-center">
                                <div class="w-32 h-32 border border-gray-300 rounded-md overflow-hidden bg-gray-100">
                                    {{-- <img src="{{ asset($news->featured_image) }}" alt="{{ $news->title }}" class="w-full h-full object-cover"> --}}

                                    <img src="{{ asset('storage/' . $news->featured_image) }}" alt="{{ $news->title }}"
                                        class="w-full h-full object-cover">

                                </div>
                                <div class="ml-4">
                                    <label for="remove_image" class="flex items-center">
                                        <input type="checkbox" name="remove_image" id="remove_image"
                                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                                        <span class="ml-2 text-sm text-gray-600">Remove current image</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- New Image Upload -->
                    <div class="col-span-2">
                        <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-1">New Featured
                            Image</label>
                        <div class="mt-1 flex items-center">
                            <label
                                class="w-full flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-sm border border-gray-300 border-dashed cursor-pointer hover:bg-gray-50">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="mt-2 text-sm text-gray-600">Select a file or drag and drop here</span>
                                <span class="mt-1 text-xs text-gray-500">PNG, JPG, GIF up to 10MB</span>
                                <input type="file" name="featured_image" id="featured_image" class="hidden"
                                    accept="image/*">
                            </label>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Uploading a new image will replace the current one</p>
                    </div>

                    <!-- Content -->
                    <div class="col-span-2">
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content <span
                                class="text-red-600">*</span></label>
                        <textarea name="content" id="summernote"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                            rows="12">{{ old('content', $news->content) }}</textarea>
                    </div>

                    <!-- Published Date -->
                    <div>
                        <label for="published_at" class="block text-sm font-medium text-gray-700 mb-1">Publish Date</label>
                        <input type="datetime-local" name="published_at" id="published_at"
                            value="{{ old('published_at', $news->published_at ? $news->published_at->format('Y-m-d\TH:i') : '') }}"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        <p class="text-xs text-gray-500 mt-1">Leave empty to use current date/time</p>
                    </div>

                    <!-- Published Status -->
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="is_published" id="is_published"
                                {{ old('is_published', $news->is_published) ? 'checked' : '' }}
                                class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            <label for="is_published" class="ml-2 block text-sm text-gray-700">Published</label>
                        </div>
                    </div>

                    <!-- Additional fields can be added here if needed -->
                    <div class="col-span-2">
                        <label for="additional_info" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes
                            (Internal)</label>
                        <textarea name="additional_info" id="additional_info" rows="3"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">{{ old('additional_info', $news->additional_info ?? '') }}</textarea>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="pt-4 border-t border-gray-200 flex justify-end space-x-3">
                    <button type="button" onclick="window.history.back()"
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                        Update Article
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Summernote
            $('#summernote').summernote({
                placeholder: 'Write your article content here...',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // Image upload preview
            const imageInput = document.getElementById('featured_image');
            const imageLabel = imageInput.parentElement;

            imageInput.addEventListener('change', function(e) {
                if (e.target.files.length > 0) {
                    const fileName = e.target.files[0].name;
                    imageLabel.querySelector('span').textContent = fileName;
                }
            });
        });
    </script>
@endsection
