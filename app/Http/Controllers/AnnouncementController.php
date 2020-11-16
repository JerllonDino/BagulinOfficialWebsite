<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\AnnouncementImage;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index() {
        $announcements = Announcement::select('id', 'title', 'created_at', 'slug')->orderBy('created_at', 'desc')->paginate(5);

        foreach ($announcements as $key => $announcement) {
            $thumbnail =  AnnouncementImage::select('src')->where('announcement_id', $announcement->id)->first();

            if ($thumbnail) {
                $announcements[$key]['thumbnail'] = $thumbnail->src;
            }
        }

        return view('pages/announcements')->with('announcements', $announcements);
    }

    public function read($slug) {
        $announcement = Announcement::select('id', 'title', 'created_at', 'content')->where('slug', $slug)->first();
        if ($announcement) {
            $images = AnnouncementImage::select('src', 'file_type')->where('announcement_id', $announcement->id)->get();
            return view('pages/read')
                    ->with('announcement', $announcement)
                    ->with('images', $images);
        }
        else {
            return abort(404);
        }
    }
}
