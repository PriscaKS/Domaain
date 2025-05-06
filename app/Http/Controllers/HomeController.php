<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
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
        return view('frontend.components.manifesto2015');
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
        return view('frontend.components.music');
    }
    public function events()
    {
        return view('frontend.components.events');
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
