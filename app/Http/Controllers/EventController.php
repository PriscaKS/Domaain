<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(8);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'event_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120', // max 5MB
            'tags' => 'nullable|string',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'public');
            $validated['image_url'] = 'storage/' . $path;
        }

        // Convert tags string to array if present
        $validated['tags'] = $request->filled('tags')
            ? array_map('trim', explode(',', $request->tags))
            : [];

        Event::create($validated);
        logActivity(
            'create',
            'New event uploaded',
            'event: ' . $request->title
        );

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }


    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }


    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'event_date' => 'required|date',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
            'tags' => 'nullable|string',
        ]);

        // Handle tags
        $validated['tags'] = array_map('trim', explode(',', $request->tags));

        // Handle image upload
        if ($request->hasFile('image_url')) {
            // Delete old image if exists
            if ($event->image_url && Storage::disk('public')->exists($event->image_url)) {
                Storage::disk('public')->delete($event->image_url);
            }

            // Store new image
            $imagePath = $request->file('image_url')->store('events', 'public');
            $validated['image_url'] = 'storage/' . $imagePath;
        } else {
            // Keep existing image path if not replaced
            $validated['image_url'] = 'storage/' .  $event->image_url;
        }

        $event->update($validated);

        logActivity(
            'update',
            'Event updated',
            'Event: ' . $event->title
        );

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }



    public function destroy(Event $event)
    {
        if ($event->image_url) {
            Storage::disk('public')->delete($event->image_url);
        }
        $title = $event->title;
        $event->delete();
        logActivity(
            'delete',
            'Event deleted',
            'event: ' . $title
        );
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
