
@extends('layouts.admin')

@section('title', 'Edit Event')

@section('content')
    <div class="max-w-3xl mx-auto mt-8">
        <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')

            <h2 class="text-xl font-semibold mb-4">Edit Event</h2>

            <div class="mb-4">
                <label for="title" class="block font-medium">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}" required
                    class="w-full border rounded p-2 @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block font-medium">Description</label>
                <textarea name="description" id="description" rows="4" required
                    class="w-full border rounded p-2 @error('description') border-red-500 @enderror">{{ old('description', $event->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="location" class="block font-medium">Location</label>
                <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}" required
                    class="w-full border rounded p-2 @error('location') border-red-500 @enderror">
                @error('location')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="event_date" class="block font-medium">Event Date</label>
                <input type="date" name="event_date" id="event_date"
                    value="{{ old('event_date', \Carbon\Carbon::parse($event->event_date)->format('Y-m-d')) }}" required
                    class="w-full border rounded p-2 @error('event_date') border-red-500 @enderror">
                @error('event_date')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            @if ($event->image_url)
                <div class="mb-4">
                    <p class="block font-medium mb-2">Current Image Preview</p>
                    <img src="{{ $event->image_url }}" alt="Event Image"
                        class="w-64 h-40 object-cover rounded shadow border">
                </div>
            @endif

            <div class="mb-4">
                <label for="image_url" class="block font-medium">Image </label>
                <input type="file" name="image_url" id="image_url" value="{{ old('image_url', $event->image_url) }}"
                    class="w-full border rounded p-2 @error('image_url') border-red-500 @enderror">
                @error('image_url')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="block font-medium">Tags (comma-separated)</label>
                <input type="text" name="tags" id="tags"
                    value="{{ old('tags', is_array($event->tags) ? implode(', ', $event->tags) : $event->tags) }}"
                    class="w-full border rounded p-2 @error('tags') border-red-500 @enderror">
                @error('tags')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Update Event
            </button>
        </form>
    </div>
@endsection
