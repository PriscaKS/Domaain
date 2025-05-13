@extends('layouts.admin')

@section('title', 'DPP Admin | Images')

@section('content')
    <div class="container mx-auto px-6 py-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Image Library</h1>
            {{-- alert --}}
            @include('frontend.commons.alerts')

            <a href="{{ route('admin.uploads') }}"
                class="px-5 py-2.5 bg-indigo-600 text-white rounded-lg shadow-sm hover:bg-indigo-700 transition duration-300 flex items-center justify-center gap-2 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                Add New Image
            </a>
        </div>

        @if ($images->isEmpty())
            <div class="bg-gray-50 rounded-xl p-12 text-center border border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-gray-500 text-lg">No images uploaded yet.</p>
                <a href="{{ route('images.create') }}"
                    class="mt-4 inline-block text-indigo-600 hover:text-indigo-800 font-medium">Upload your first image</a>
            </div>
        @else
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($images as $image)
                    <div
                        class="relative bg-white rounded-xl shadow-sm overflow-hidden group transition-all duration-300 hover:shadow-xl border border-gray-100">

                        <div class="h-48 overflow-hidden rounded">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->title }}"
                                class="w-full h-full object-cover rounded">
                        </div>


                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-start p-4">
                            <div class="flex gap-3 mx-auto">
                                <a href="{{ route('images.edit', $image->id) }}"
                                    class="text-white bg-indigo-600 p-2.5 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                </a>
                                <form action="{{ route('images.destroy', $image->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this image?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white bg-red-600 p-2.5 rounded-lg hover:bg-red-700 transition-colors duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-gray-800 truncate mb-1">{{ $image->title }}</h3>
                            <div class="flex items-center mb-2">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                    {{ $image->category }}
                                </span>
                            </div>
                            {{-- <p class="text-sm text-gray-600 line-clamp-2">{{ $image->description }}</p> --}}
                            <p class="text-sm text-gray-600 line-clamp-2">
                                {{ \Illuminate\Support\Str::limit($image->description, 50) }}
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $images->links() }}
            </div>
        @endif
    </div>
@endsection
