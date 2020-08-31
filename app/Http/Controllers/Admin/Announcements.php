<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Announcement;
use App\DocumentCategory;

class Announcements extends Controller
{
    public function index() {
        $announcements = Announcement::select('id', 'slug', 'title', 'created_at')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin/announcements')->with('announcements', $announcements);
    }

    public function save(Request $request) {
        $request->validate(array(
            'title' => 'required|min:4|max:255',
            'content' => 'required'
        ));

        $announcement = new Announcement;
        $announcement->title = $request->title;
        $announcement->slug = time() . rand(11, 99) . '_' . str_replace(' ', '-', $announcement->title);
        $announcement->content = $this->dataready($request->content);
        $announcement->save();
    }

    public function read($slug) {
        $announcement = Announcement::select('title', 'content')->where('slug', $slug)->first();
        return view('admin/announcement')->with('announcement', $announcement);
    }

    public function edit($id) {
        $announcement = Announcement::select('id', 'title', 'content')->where('id', $id)->first();
        return view('admin/update-announcement')->with('announcement', $announcement);
    }

    public function update(Request $request) {
        $request->validate([
            'id' => 'required',
            'title' => 'required|min:4|max:255',
            'content' => 'required'
        ]);

        $announcement = Announcement::find($request->id);
        $announcement->title = $request->title;
        $announcement->slug = time() . rand(11, 99) . '_' . str_replace(' ', '-', $announcement->title);
        $announcement->content = $this->dataready($request->content);
        $announcement->save();
    }

    public function delete(Request $request) {
        $request->validate(array(
            'id' => 'required'
        ));

        $announcement = Announcement::find($request->id);
        if ($announcement) {
            $announcement->delete();
        }
    }

    public function dataready($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
