<?php

namespace App\Http\Controllers;

use App\MunicipalProfileCategory;
use App\MunicipalProfile;
use Illuminate\Http\Request;

class MunicipalProfileController extends Controller
{
    public function index() {
        $categories = MunicipalProfileCategory::select('id', 'category')->get();
        return view('pages/municipal-profile')->with('categories', $categories);
    }

    public function getFiles(Request $request) {
        if (!empty(trim($request->category))) {
            $files = MunicipalProfile::select('file_name', 'category_id')->where('category_id', $request->category)->get();
            return response()->json($files);
        }
    }
}
