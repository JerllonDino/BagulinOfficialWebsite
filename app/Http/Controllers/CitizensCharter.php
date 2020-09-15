<?php

namespace App\Http\Controllers;

use App\CitizensCharterFile;
use Illuminate\Http\Request;

class CitizensCharter extends Controller
{
    protected $category_ids = array('services', 'forms');

    public function index() {
        $categories = array(
            array('id' => 1, 'category' => 'services'),
            array('id' => 2, 'category' => 'forms')
        );

        return view('pages/citizens_charter')->with('categories', $categories);
    }

    public function getFiles(Request $request) {
        if (!empty(trim($request->category))) {
            $files = CitizensCharterFile::select('file_name', 'category_id')->where('category_id', $request->category)->get();
            return response()->json($files);
        }
    }
}
