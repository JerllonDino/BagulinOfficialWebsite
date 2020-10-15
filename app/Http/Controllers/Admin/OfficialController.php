<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Official;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfficialController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        $mayor = Official::where('position', 'mayor')->first();
        $vicemayor = Official::where('position', 'vicemayor')->first();
        $officials = [$mayor, $vicemayor];
        return view('admin/officials', ['officials' => $officials]);
    }

    public function decodeBase64($base64)
    {
        // get file type
        $pos = strpos($base64, ';');
        $type = explode('/', substr($base64, 0, $pos))[1];

        // decode base64
        $base64_str = substr($base64, strpos($base64, ',') +  1);
        $image = base64_decode($base64_str);

        return array(
            'contents' => $image
        );
    }

    public function saveOfficial(Request $request, $count = null) {
        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'position' => 'required|string',
            'location' => 'required|string',
            'about_message' => 'nullable|string',
            'welcome_message' => 'nullable|string'
        ]);

        $welcomeBase = json_decode($request->welcomeBase, true);
        $aboutBase = json_decode($request->aboutBase, true);
        $welcomeImageName = $request->welcome_image_name;
        $aboutImageName = $request->about_image_name;
        if ($welcomeBase) {
            $decodedWelcome = $this->decodeBase64($welcomeBase);
            $welcomeImageName = $count != null & $count >= 0 ? 2 . "welcome-" : "welcome-" . $request->position . ".png";
            Storage::disk('s3')->put( 'officials/' . $request->position . '/' . $welcomeImageName, $decodedWelcome['contents']);
        }

        if($aboutBase){
            $decodedAbout = $this->decodeBase64($aboutBase);
            $aboutImageName = $request->first_name . $request->position . ".png";
            Storage::disk('s3')->put( 'officials/' . $request->position . '/' . $aboutImageName, $decodedAbout['contents']);
        }

        $data = [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'position' => $request->position,
            'location' => $request->location,
            'welcome_message' => $request->welcome_message,
            'about_message' => $request->about_message,
            'welcome_image' => $welcomeImageName,
            'about_image' => $aboutImageName,
        ];

        if ($request->id) {
            Official::where('id', $request->id)
                        ->update($data);
        }else{
            Official::insert($data);
        }

    }

    public function getOfficialsByPosition($position)
    {
        $official = Official::where('position', $position)->get();
        $html = view('admin/officials-view', ['officials' => $official, 'max' => $position == 'councilor' ? 8 : 12 ]);
        return response()->json(['html' => $html->render()]);
    }

    public function getOfficialsById($id)
    {
        $official = Official::where('id', $id)->first();
        return response()->json($official);
    }

    public function deleteOfficial($id)
    {
        $official = Official::where('id', $id);
        $official->delete();
        return response()->json(['message' => 'Delete Successful'], 200);
    }

}