<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tourism;
use App\TourismImages;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TourismController extends Controller
{
    public function index()
    {
        return view('admin.tourism');
    }

    public function store(Request $request)
    {
        $request->validate([
            'spot_name' => 'required',
            'spot_description' => 'required',
            'spot_location' => 'required'
        ]);

        $directory = 'touristSpotImages/' . preg_replace('/\s+/', '', $request->spot_name);
        $spot = Tourism::find($request->id);

        if ($spot) {
            $directory = $spot->directory;
        }

        $tourism = Tourism::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            'spot_name' => $request->spot_name,
            'spot_description' => $request->spot_description,
            'spot_location' => $request->spot_location,
            'spot_geolocation' => $request->spot_geolocation,
            'directory' => $directory
        ]);
        
        if($request->spot_images){

            $images = $request->spot_images;

            foreach($images as $key => $image) {
                $image = json_decode($image, true);
                // dd($image);
                $decoded = $this->decodeBase64($image['base64']);
                $fileName =  time() . rand(11, 99) . '_' . str_replace('_', '-', $image['fileName']);

                if ($decoded !== FALSE) {
                    $tourismImages = TourismImages::insert([
                        'tourism_id' => $tourism->id,
                        'order' => $key,
                        'file_name' => $fileName
                    ]);
                    $result = Storage::disk('public')->put($directory . '/' . $fileName, $decoded['contents']);
                }
            }
        }
        return redirect()->route('tourism.index');
        
    }

    public function getDatatables()
    {
        $tourism = Tourism::all();

        return DataTables::of($tourism)->toJson();
    }

    private function decodeBase64($base64)
    {
        // dd($base64);
        $allowed_extensions = ['png', 'jpeg', 'jpg'];
        
        // get file type
        $pos = strpos($base64, ';');
        // dd($pos);
        $extension = explode('/', substr($base64, 0, $pos));
        $extension = isset($extension[1]) ? $extension[1] : 'wala';
        // dd(explode('/', substr($base64, 0, $pos)));

        if (in_array($extension, $allowed_extensions)) {
            // decode base64
            $base64_str = substr($base64, strpos($base64, ',') +  1);
            $image = base64_decode($base64_str);
        }else{
            Session::put('error', 'The file you uploaded is not a valid image.');
            return redirect()->route('tourism.index');
        }

        return array(
            'contents' => $image
        );
    }

    public function getSpot(Request $request)
    {
        $spot = Tourism::where('id', $request->id)->with('tourism_images')->first()->toArray();
        return response()->json($spot);
    }

    public function deleteSpot(Request $request)
    {
        if (!empty($request->ids)) {
            foreach ($request->ids as $id) {
                $tourism = Tourism::find($id);
                Storage::deleteDirectory("/public/". $tourism->directory);
                $tourism->delete();
            }
        }
    }

    public function deleteImage(Request $request)
    {
        if ($request->id) {
            $image = TourismImages::where('id', $request->id)->with('tourisms')->first();
            Storage::disk('public')->delete($image->tourisms->directory."/".$image->file_name);
            $image->delete();
        }
    }
}
