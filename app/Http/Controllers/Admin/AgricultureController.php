<?php

namespace App\Http\Controllers\Admin;

use App\Agriculture;
use App\AgriProductImages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AgricultureController extends Controller
{
    public function index()
    {
        return view('admin.agriculture');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_location' => 'required',
            'product_description' => 'required',
        ]);

        $directory = 'agriProductImages/' . preg_replace('/\s+/', '', $request->product_name);

        $product = Agriculture::find($request->id);
        if ($product) {
            $directory = $product->directory;
        }

        $agriculture = Agriculture::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            'product_name' => $request->product_name,
            'product_location' => $request->product_location,
            'product_description' => $request->product_description,
            'directory' => $directory
        ]);
        
        if($request->product_images){

            $images = $request->product_images;

            foreach($images as $key => $image) {
                $image = json_decode($image, true);
                $decoded = $this->decodeBase64($image['base64']);
                $fileName =  time() . rand(11, 99) . '_' . str_replace('_', '-', $image['fileName']);

                if ($decoded !== FALSE) {
                    $agriImages = AgriProductImages::insert([
                        'agriculture_id' => $agriculture->id,
                        'order' => $key,
                        'file_name' => $fileName,
                    ]);
                    $result = Storage::disk('public')->put($directory . '/' . $fileName, $decoded['contents']);
                }
            }
        }
        return redirect()->route('agriculture.index');
        
    }

    public function getDatatables()
    {
        $agriculture = Agriculture::all();

        return DataTables::of($agriculture)->toJson();
    }

    private function decodeBase64($base64)
    {
        // dd($base64);
        $allowed_extensions = ['png', 'jpeg', 'jpg'];
        
        // get file type
        $pos = strpos($base64, ';');
        // dd($pos);
        $extension = explode('/', substr($base64, 0, $pos));
        $extension = $extension[1];
        // dd(explode('/', substr($base64, 0, $pos)));

        if (in_array($extension, $allowed_extensions)) {
            // decode base64
            $base64_str = substr($base64, strpos($base64, ',') +  1);
            $image = base64_decode($base64_str);
        }else{
            Session::put('error', 'The file you uploaded is not a valid image.');
            return redirect()->route('agriculture.index');
        }

        return array(
            'contents' => $image
        );
    }

    public function getProduct(Request $request)
    {
        $product = Agriculture::where('id', $request->id)->with('agriproduct_images')->first()->toArray();
        return response()->json($product);
    }

    public function deleteProduct(Request $request)
    {
        if (!empty($request->ids)) {
            foreach ($request->ids as $id) {
                $agriculture = Agriculture::find($id);
                Storage::deleteDirectory("/public/". $agriculture->directory);
                $agriculture->delete();
            }
        }
    }

    public function deleteImage(Request $request)
    {
        if ($request->id) {
            $image = AgriProductImages::where('id', $request->id)->with('agriculture')->first();
            Storage::disk('public')->delete($image->agriculture->directory."/".$image->file_name);
            $image->delete();
        }
    }
}
