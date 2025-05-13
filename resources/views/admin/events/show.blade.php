@extends('layouts.admin')

@section('title', 'Event | Event Details')

@section('content')
    <div class="container mx-auto px-6 py-10 max-w-4xl">
        {{-- Back Button --}}
        <div class="mb-6">
            <a href="{{ route('events.index') }}"
               class="inline-flex items-center text-sm text-indigo-600 hover:text-indigo-800 font-medium transition duration-300">
                ← Back to Events
            </a>
        </div>

        {{-- Event Card --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
            <div class="h-64 w-full overflow-hidden">
                <img src="{{ $event->image_url }}" alt="{{ $event->title }}"
                     class="w-full h-full object-cover">
            </div>

            <div class="p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $event->title }}</h1>
                        <p class="text-sm text-gray-600 mb-1">
                            📍 <strong>Location:</strong> {{ $event->location }}
                        </p>
                        <p class="text-sm text-gray-600">
                            📅 <strong>Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
                        </p>
                    </div>

                    <div class="flex gap-2">
                        <a href="{{ route('events.edit', $event->id) }}"
                           class="text-indigo-600 hover:text-indigo-800 transition text-sm font-medium">Edit</a>

                        <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this event?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-red-600 hover:text-red-800 text-sm font-medium transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

                <hr class="my-4 border-gray-200">

                <div class="prose max-w-none text-gray-800">
                    {!! nl2br(e($event->description)) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
