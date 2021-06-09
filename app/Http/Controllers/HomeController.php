<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Tourism;
use App\AnnouncementImage;
use App\TourismImages;
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
        $latestAnnouncements =  Announcement::select('id', 'title', 'created_at', 'slug')->orderBy('created_at', 'desc')->limit(5)->get();

        foreach($latestAnnouncements as $key => $announcement) {
            $image = AnnouncementImage::select('src')->where('announcement_id', $announcement->id)->first();
            $latestAnnouncements[$key]['image'] = $image->src;

        }

        $tourism = Tourism::with('tourism_images')->get();
        return view('home')->with([
            'announcements' => $latestAnnouncements,
            'tourism' => $tourism
            ]);
    }
}
