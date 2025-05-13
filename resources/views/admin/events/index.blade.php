@extends('layouts.admin')

@section('title', 'DPP Admin | Events')

@section('content')
    <div class="container mx-auto px-6 py-10">
        {{-- alerts --}}
        @include('frontend.commons.alerts')
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <h1 class="text-3xl font-bold text-gray-900">All Events</h1>


            <a href="{{ route('events.create') }}"
                class="px-5 py-2.5 bg-indigo-600 text-white rounded-lg shadow-sm hover:bg-indigo-700 transition duration-300 flex items-center justify-center gap-2 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                Add New Event
            </a>
        </div>

        @if ($events->isEmpty())
            <div class="bg-gray-50 rounded-xl p-12 text-center border border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M12 8c1.657 0 3 .895 3 2s-1.343 2-3 2-3-.895-3-2 1.343-2 3-2zM3 20h18M12 14v6" />
                </svg>
                <p class="text-gray-500 text-lg">No events created yet.</p>
                <a href="{{ route('events.create') }}"
                    class="mt-4 inline-block text-indigo-600 hover:text-indigo-800 font-medium">Create your first event</a>
            </div>
        @else
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($events as $event)
                    <div
                        class="relative bg-white rounded-xl shadow-sm overflow-hidden group transition-all duration-300 hover:shadow-xl border border-gray-100">

                        <div class="h-48 overflow-hidden rounded">
                            <img src="{{ $event->image_url }}" alt="{{ $event->title }}"
                                class="w-full h-full object-cover rounded">
                        </div>

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center p-4">
                            <div class="flex gap-3">
                                {{-- View --}}
                                <a href="{{ route('events.show', $event->id) }}"
                                    class="text-white bg-gray-600 p-2.5 rounded-lg hover:bg-gray-700 transition-colors duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M10 3C5 3 1.73 7.11 1 10c.73 2.89 4 7 9 7s8.27-4.11 9-7c-.73-2.89-4-7-9-7zm0 11a4 4 0 110-8 4 4 0 010 8z" />
                                    </svg>
                                </a>

                                {{-- Edit --}}
                                <a href="{{ route('events.edit', $event->id) }}"
                                    class="text-white bg-indigo-600 p-2.5 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                </a>

                                {{-- Delete --}}
                                <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this event?')">
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
                            <h3 class="text-lg font-semibold text-gray-800 truncate mb-1">{{ $event->title }}</h3>
                            <p class="text-sm text-gray-600 mb-2">{{ $event->location }}</p>
                            <p class="text-sm text-gray-500">
                                {{ \Illuminate\Support\Str::limit($event->description, 50) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $events->links() }}
            </div>
        @endif
    </div>
@endsection
