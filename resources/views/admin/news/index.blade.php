<!-- admin/news/index.blade.php -->
@extends('layouts.admin')

@section('title', 'DPP Admin Dashboard')

@section('content')
    <div class="max-w-6xl mx-auto mt-10">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">News Management</h2>
                <a href="{{ route('admin.uploads') }}"
                    class="mt-2 md:mt-0 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    <i class="fas fa-plus mr-1"></i> Add News
                </a>
            </div>
            {{-- alerts  --}}
            @include('frontend.commons.alerts')

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-sm p-4 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm opacity-80">Total News</p>
                            <h3 class="text-2xl font-bold">{{ $news->count() }}</h3>
                        </div>
                        <div class="text-3xl opacity-80">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg shadow-sm p-4 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm opacity-80">Published This Month</p>
                            <h3 class="text-2xl font-bold">
                                {{ $news->where('created_at', '>=', now()->startOfMonth())->count() }}</h3>
                        </div>
                        <div class="text-3xl opacity-80">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg shadow p-4 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm opacity-80">Categories</p>
                            <h3 class="text-2xl font-bold">{{ $news->pluck('category')->unique()->count() }}</h3>
                        </div>
                        <div class="text-3xl opacity-80">
                            <i class="fas fa-tags"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-red-500 to-red-600 rounded-lg shadow p-4 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm opacity-80">Featured News</p>
                            <h3 class="text-2xl font-bold">{{ $news->where('is_featured', true)->count() }}</h3>
                        </div>
                        <div class="text-3xl opacity-80">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            @if ($news->isEmpty())
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-yellow-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">No news articles found. Click "Add News" to create your first
                                article.</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="bg-white overflow-hidden border border-gray-200 rounded-lg shadow-sm mb-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Category</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date</th>
                                <th scope="col"
                                    class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($news as $item)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $item->title }}</div>
                                        <div class="text-xs text-gray-500">ID: {{ $item->id }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            {{ $item->category }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $item->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex items-center justify-end space-x-3">
                                            <a href="{{ route('news.show', $item->id) }}"
                                                class="text-indigo-600 hover:text-indigo-900" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="{{ route('news.edit', $item->id) }}"
                                                class="text-blue-600 hover:text-blue-800" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('news.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this news?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800"
                                                    title="Delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if ($news instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="mt-4">
                        {{ $news->links() }}
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
