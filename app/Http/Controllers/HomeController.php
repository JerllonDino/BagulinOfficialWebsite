<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latestAnnouncements =  Announcement::select('title', 'created_at', 'slug')->orderBy('created_at', 'desc')->limit(5)->get();
        return view('home')->with('announcements', $latestAnnouncements);
    }
}
