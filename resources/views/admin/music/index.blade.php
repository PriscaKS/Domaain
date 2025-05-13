
@extends('layouts.admin')

@section('title', 'Music Management')

@section('content')
<div class="max-w-6xl mx-auto mt-10">
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Music Management</h2>
            <a href="{{ route('admin.uploads') }}" class="mt-2 md:mt-0 px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition">
                <i class="fas fa-plus mr-1"></i> Upload Music
            </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="bg-purple-600 rounded-lg shadow-sm p-4 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm opacity-80">Total Tracks</p>
                        <h3 class="text-2xl font-bold">{{ $music->count() }}</h3>
                    </div>
                    <div class="text-3xl opacity-80">
                        <i class="fas fa-music"></i>
                    </div>
                </div>
            </div>

            <div class="bg-green-600 rounded-lg shadow-sm p-4 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm opacity-80">Uploaded This Month</p>
                        <h3 class="text-2xl font-bold">
                            {{ $music->where('created_at', '>=', now()->startOfMonth())->count() }}
                        </h3>
                    </div>
                    <div class="text-3xl opacity-80">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                </div>
            </div>

            <div class="bg-blue-600 rounded-lg shadow-sm p-4 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm opacity-80">Categories</p>
                        <h3 class="text-2xl font-bold">{{ $music->pluck('category')->unique()->count() }}</h3>
                    </div>
                    <div class="text-3xl opacity-80">
                        <i class="fas fa-tags"></i>
                    </div>
                </div>
            </div>

            <div class="bg-pink-600 rounded-lg shadow-sm p-4 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm opacity-80">Last Uploaded</p>
                        <h3 class="text-lg font-bold">
                            {{ $music->first()?->created_at->diffForHumans() ?? 'N/A' }}
                        </h3>
                    </div>
                    <div class="text-3xl opacity-80">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Music Table -->
        @if($music->isEmpty())
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                <p class="text-sm text-yellow-700">No music tracks found. Click "Upload Music" to add a track.</p>
            </div>
        @else
            <div class="bg-white overflow-hidden border border-gray-200 rounded-lg shadow-sm mb-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Artist</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Uploaded</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($music as $track)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $track->title }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $track->artist }}</td>
                                <td class="px-6 py-4 text-sm text-purple-700">{{ $track->category }}</td>
                                <td class="px-6 py-4 text-sm text-gray-500">{{ $track->created_at->format('M d, Y') }}</td>
                                <td class="px-6 py-4 text-right text-sm font-medium">
                                    <div class="flex items-center justify-end space-x-4">
                                        <!-- Play in Modal -->
                                        <button onclick="openPlayer('{{ asset('storage/' . $track->file) }}', '{{ $track->title }}')"
                                            class="text-indigo-600 hover:text-indigo-900" title="Preview">
                                            <i class="fas fa-play-circle"></i>
                                        </button>
{{-- 
                                        <!-- Download -->
                                        <a href="{{ asset('storage/' . $track->file) }}" 
                                           download="{{ $track->title }}.mp3"
                                           class="text-green-600 hover:text-green-800" title="Download">
                                            <i class="fas fa-download"></i>
                                        </a> --}}

                                       

                                        <!-- Delete -->
                                        <form action="{{ route('music.destroy', $track->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this track?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800" title="Delete">
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
        @endif
    </div>
</div>

<!-- Modal for Music Player -->
<div id="musicModal" class="fixed z-50 inset-0 bg-gray-900 bg-opacity-60 hidden items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full relative">
        <button onclick="closePlayer()" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
            <i class="fas fa-times"></i>
        </button>
        <h3 id="modalTitle" class="text-xl font-bold mb-4 text-gray-800"></h3>
        <audio id="modalAudio" controls class="w-full">
            <source src="" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
</div>

<script>
    function openPlayer(url, title) {
        document.getElementById('musicModal').classList.remove('hidden');
        document.getElementById('modalAudio').src = url;
        document.getElementById('modalTitle').innerText = title;
    }

    function closePlayer() {
        document.getElementById('musicModal').classList.add('hidden');
        document.getElementById('modalAudio').pause();
        document.getElementById('modalAudio').src = '';
    }
</script>
@endsection
