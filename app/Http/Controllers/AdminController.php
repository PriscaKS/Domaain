<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Activity;


class AdminController extends Controller
{
    //

    public function index()
    {
        // Get the most recent activities (example: last 5)
        $activities = Activity::latest()->take(5)->get();

        // Count the news articles (example)
        $newsCount = News::count();

        return view('admin.dashboard', compact('activities', 'newsCount'));
    }
    public function activity()
    {

        $activities = Activity::latest()->paginate(8);
        return view('admin.activity', compact('activities'));
    }
    public function uploads()
    {
        return view('admin.uploads');
    }
    public function transactions()
    {
        return view('admin.transactions');
    }
    public function music()
    {
        return view('admin.music');
    }
    public function enquiries()
    {
        return view('admin.enquiries');
    }
    public function news()
    {
        return view('admin.news.index');
    }
    public function settings()
    {
        return view('admin.settings');
    }
}
