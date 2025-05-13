<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $news = News::latest()->paginate(10);
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_published' => 'nullable|boolean',
        ]);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('news_images', 'public');
        }

        $data['is_published'] = $request->has('is_published');

        News::create($data);

        logActivity(
            'create',
            'New News Published',
            'News: ' . $request->title
        );

        return redirect()->route('news.index')->with('success', 'News published successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        // return view('admin.news.show', compact('news'));
        $relatedNews = News::where('category', $news->category)
            ->where('id', '!=', $news->id)
            ->limit(3)
            ->get();

        return view('admin.news.show', compact('news', 'relatedNews'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(News $news)
    {

        return view('admin.news.edit', compact('news'));
    }



    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'content' => 'required',
            'featured_image' => 'nullable|image|max:10240',
        ]);

        // Handle the featured image
        if ($request->hasFile('featured_image')) {
            // Store the new image
            $imagePath = $request->file('featured_image')->store('news_images', 'public');
            $news->featured_image = 'storage/' . $imagePath;
        } elseif ($request->has('remove_image')) {
            // Remove existing image
            $news->featured_image = null;
        }

        // Update other fields
        $news->title = $request->title;
        $news->category = $request->category;
        $news->content = $request->content;
        $news->is_published = $request->has('is_published');

        $news->save();
        logActivity(
            'update',
            'News updated',
            'News: ' . $request->title
        );
        return redirect()->route('news.show', $news->id)
            ->with('success', 'News article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->featured_image) {
            Storage::disk('public')->delete($news->featured_image);
        }

        $title = $news->title; 
        $news->delete();

        logActivity(
            'delete',
            'News Deleted',
            'News: ' . $title
        );

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
