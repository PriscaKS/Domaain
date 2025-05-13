<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $music = Music::latest()->get();
        return view('admin.music.index', compact('music'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'file' => 'required|mimes:mp3,wav,ogg|max:20480', // 20MB max
        ]);

        // Store file
        $path = $request->file('file')->store('music_files', 'public');

        Music::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'category' => $request->category,
            'file' => $path,
        ]);


        logActivity(
            'music_upload',
            'New music uploaded',
            'Track: ' . $request->title
        );

        return redirect()->route('music.index')->with('success', 'Music uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Music $music)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'category' => 'required|string',
            'file' => 'nullable|mimes:mp3,wav,ogg|max:20480',
        ]);

        if ($request->hasFile('file')) {
            if ($music->file) {
                Storage::disk('public')->delete($music->file);
            }
            $data['file'] = $request->file('file')->store('music_files', 'public');
        }

        $music->update($data);

        return redirect()->route('music.index')->with('success', 'Music updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        if ($music->audio_file) {
            Storage::disk('public')->delete($music->audio_file);
        }
        $title = $music->title; 
        $music->delete();

        logActivity(
            'delete',
            'Music Deleted',
            'Music: ' . $title
        );

        return redirect()->route('music.index')->with('success', 'Music deleted.');
    }
}
