<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Music;
use App\Models\Image;
use App\Models\Event;


class HomeController extends Controller
{
    public function welcome()
    {
        $music = Music::latest()->get();
        $leaders = Image::where('category', 'Leaders')->get();
        return view('welcome', compact('leaders', 'music'));
    }
    public function membership()
    {
        return view('frontend.components.membership');
    }
    public function manifesto2019()
    {
        return view('frontend.components.manifesto2019');
    }
    public function manifesto2025()
    {
        return view('frontend.components.manifesto2025');
    }
    public function loadingscreen()
    {
        return view('frontend.components.loading-screen');
    }
    public function contacts()
    {
        return view('frontend.components.contact');
    }
    public function music()
    {
        // Fetch all music records, latest first
        $music = Music::orderBy('created_at', 'desc')->get();


        return view('frontend.components.music', compact('music'));
    }
    public function events()
    {
        $events = Event::latest()->get();
        return view('frontend.components.events', compact('events'));
    }
    public function news()
    {
        $newsList = News::orderBy('created_at', 'desc')->get();
        return view('frontend.components.news', compact('newsList'));
    }

    public function news_detail($id)
    {
        $news = News::findOrFail($id);

        $relatedNews = News::where('category', $news->category)
            ->where('id', '!=', $news->id)
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.components.news_detail', compact('news', 'relatedNews'));
    }




    public function code_of_conduct()
    {
        return view('frontend.components.code_of_conduct');
    }
    public function policies()
    {
        return view('frontend.components.policies');
    }
    public function donate()
    {
        return view('frontend.components.donate');
    }
    public function volunteer()
    {
        return view('frontend.components.volunteer');
    }
}
