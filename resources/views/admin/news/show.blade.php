<!-- admin/news/show.blade.php -->
@extends('layouts.admin')

@section('title', 'View News Article')

@section('content')
    <div class="max-w-6xl mx-auto mt-10">
        <div class="mb-6">
            <a href="{{ route('news.index') }}" class="flex items-center text-blue-600 hover:text-blue-800 transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to News List
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">View News Article</h2>
                <div class="mt-2 md:mt-0 flex space-x-2">
                    <a href="{{ route('news.edit', $news->id) }}"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                    <form action="{{ route('news.destroy', $news->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this news article?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
                            <i class="fas fa-trash-alt mr-1"></i> Delete
                        </button>
                    </form>
                </div>
            </div>

            <!-- News Details -->
            <div class="bg-white overflow-hidden border border-gray-200 rounded-lg shadow-sm mb-6">
                <div class="p-6">
                    <!-- Header Section -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900">{{ $news->title }}</h1>
                                <div class="flex items-center mt-2 text-sm text-gray-500">
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar mr-1"></i>
                                        {{ $news->created_at->format('M d, Y') }}
                                    </span>
                                    <span class="mx-3">•</span>
                                    <span class="flex items-center">
                                        <i class="fas fa-tag mr-1"></i>
                                        <span
                                            class="px-2 py-0.5 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">
                                            {{ $news->category }}
                                        </span>
                                    </span>
                                    @if ($news->is_featured)
                                        <span class="mx-3">•</span>
                                        <span class="flex items-center text-yellow-600">
                                            <i class="fas fa-star mr-1"></i>
                                            Featured
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="text-gray-500">
                                <span class="text-xs">ID: {{ $news->id }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    {{-- @if ($news->featured_image)
                        <div class="mb-6">
                            <img src="{{ asset('storage/' . $news->featured_image) }}" alt="{{ $news->title }}"
                                class="w-full h-auto rounded-lg shadow-md">
                        </div>
                    @endif --}}

                    @if ($news->featured_image)
                        <div class="mb-6">
                            <img src="{{ asset('storage/' . $news->featured_image) }}" alt="{{ $news->title }}"
                                class="w-full h-60 object-cover rounded-lg shadow-md">
                        </div>
                    @endif

                    <!-- Content -->
                    <div class="prose max-w-none">
                        {!! $news->content !!}
                    </div>

                    <!-- Additional Metadata -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Additional Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-md">
                                <div class="text-sm text-gray-500">Last Updated</div>
                                <div class="font-medium">{{ $news->updated_at->format('M d, Y h:i A') }}</div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-md">
                                <div class="text-sm text-gray-500">Author</div>
                                <div class="font-medium">{{ $news->author ?? 'System' }}</div>
                            </div>

                            @if ($news->published_at)
                                <div class="bg-gray-50 p-4 rounded-md">
                                    <div class="text-sm text-gray-500">Published Date</div>
                                    <div class="font-medium">{{ $news->published_at->format('M d, Y h:i A') }}</div>
                                </div>
                            @endif

                            <div class="bg-gray-50 p-4 rounded-md">
                                <div class="text-sm text-gray-500">Visibility</div>
                                <div class="font-medium">
                                    @if ($news->is_active)
                                        <span
                                            class="px-2 py-0.5 bg-green-100 text-green-800 rounded-full text-xs font-semibold">
                                            Active
                                        </span>
                                    @else
                                        <span
                                            class="px-2 py-0.5 bg-gray-100 text-gray-800 rounded-full text-xs font-semibold">
                                            Draft
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related News -->
            @if (isset($relatedNews) && $relatedNews->count() > 0)
                <div class="mt-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Related News</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach ($relatedNews as $related)
                            <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                                @if ($related->featured_image)
                                    <img src="{{ asset('storage/' . $news->featured_image) }}" alt="{{ $related->title }}"
                                        class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-gray-400 text-4xl"></i>
                                    </div>
                                @endif
                                <div class="p-4">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $related->title }}</h4>
                                    <div class="flex items-center text-sm text-gray-500 mb-3">
                                        <i class="fas fa-calendar mr-1"></i>
                                        {{ $related->created_at->format('M d, Y') }}
                                        <span class="mx-2">•</span>
                                        <span
                                            class="px-2 py-0.5 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">
                                            {{ $related->category }}
                                        </span>
                                    </div>
                                    <a href="{{ route('news.show', $related->id) }}"
                                        class="inline-block text-blue-600 hover:text-blue-800 mt-2">
                                        View Article <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
