<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

   public function index(){

           return view('admin.dashboard');

   }
   public function activity(){

           return view('admin.activity');

   }
   public function uploads(){
       return view('admin.uploads');
   }
   public function transactions(){
       return view('admin.transactions');
   }
   public function music(){
       return view('admin.music');
   }
   public function enquiries(){
       return view('admin.enquiries');
   }
   public function news(){
       return view('admin.news');
   }
   public function settings(){
       return view('admin.settings');
   }
}
