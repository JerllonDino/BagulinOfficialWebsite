<?php

namespace App\Http\Controllers\Admin;


use App\Announcement;
use App\DocumentCategory;
use App\AnnouncementImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Announcements extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index() {
        $announcements = Announcement::select('id', 'slug', 'title', 'created_at')->orderBy('created_at', 'desc')->paginate(5);

        return view('admin/announcements')->with('announcements', $announcements);
    }

    public function save(Request $request) {
        $request->validate(array(
            'title' => 'required|min:4|max:255',
            'announcement_content' => 'required'
        ));

        $announcement = new Announcement;
        $announcement->title = $request->title;
        $announcement->slug = time() . rand(11, 99) . '_' . str_replace(' ', '-', $announcement->title);
        $announcement->content = $this->dataready($request->announcement_content);
        $announcement->save();

        $this->storeImages($request->images, $announcement->id);
    }

    public function read($slug) {
        $announcement = Announcement::select('title', 'content')->where('slug', $slug)->first();
        return view('admin/announcement')->with('announcement', $announcement);
    }

    public function edit($id) {
        $announcement = Announcement::select('id', 'title', 'content')->where('id', $id)->first();
        $images = $this->getImages($id);
        return view('admin/update-announcement')->with('announcement', $announcement)->with('images', $images);
    }

    public function update(Request $request) {
        $request->validate([
            'id' => 'required',
            'title' => 'required|min:4|max:255',
            'update_content' => 'required'
        ]);

        $announcement = Announcement::find($request->id);

        $prefix = explode('_', $announcement->slug)[0];
        $announcement->title = $request->title;

        $announcement->slug =  $prefix . '_' . str_replace(' ', '-', $announcement->title);
        $announcement->content = $this->dataready($request->update_content);
        $announcement->save();

        $this->storeImages($request->images, $announcement->id);
    }

    public function delete(Request $request) {
        $request->validate(array(
            'id' => 'required'
        ));

        $announcement = Announcement::find($request->id);
        if ($announcement) {
            // delete uploaded images
            $images = AnnouncementImage::select('src')->where('announcement_id', $announcement->id)->get();
            foreach ($images as $image) {
                Storage::disk('public')->delete('announcements/' . $image->src);
            }

            AnnouncementImage::where('announcement_id', $announcement->id)->delete();
            $announcement->delete();
        }
    }

    public function dataready($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function decodeBase64($base64)
    {
        // get file type
        $pos = strpos($base64, ';');
        $type = explode('/', substr($base64, 0, $pos))[1];

        // decode base64
        $base64_str = substr($base64, strpos($base64, ',') +  1);
        $image = base64_decode($base64_str);
        $fileName = uniqid() . ".$type";

        return array(
            'file_name' => $fileName,
            'contents' => $image
        );
    }

    public function storeImages($images, $announcement_id) {

        if ( !empty($images) ) {
           $images = json_decode($images, true);
           $data = array();
           foreach ($images as $image) {
               $decoded = $this->decodeBase64($image);
               if ($decoded !== FALSE) {
                   $result = Storage::disk('public')->put('announcements/' . $decoded['file_name'], $decoded['contents']);
                   if ($result) {
                       $data[] = array(
                           'announcement_id' => $announcement_id,
                           'src' => $decoded['file_name']
                       );
                   }
               }
           }
           AnnouncementImage::insert($data);
       }
    }

    public function getImages($announcement_id) {
        $images = AnnouncementImage::select('src', 'id')->where('announcement_id', $announcement_id)->get();
        return $images;
    }

    public function deleteImage(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);

        $image = AnnouncementImage::find($request->id);
        Storage::disk('public')->delete('announcements/' . $image->src);
        $image->delete();
    }
}
