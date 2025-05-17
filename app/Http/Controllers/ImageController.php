<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::latest()->paginate(12);

        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:10240',
            'category' => 'required|string|max:50',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $path = $request->file('image')->store('images', 'public');

        Image::create([
            'title' => $request->title,
            'path' => $path,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        logActivity(
            'create',
            'Image under ' . $request->category . ' created',
            'image: ' . $request->title
        );

        return redirect()->route('images.index')->with('success', 'Image uploaded successfully.');
    }

    public function edit()
    {

        return view('frontend.images.edit');
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($image->path);
        $title = $image->title;
        $image->delete();
        logActivity(
            'delete',
            'An Image has been deleted',
            'Image: ' . $title
        );
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}
