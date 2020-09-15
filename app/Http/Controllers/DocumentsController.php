<?php

namespace App\Http\Controllers;

use App\DocumentCategory;
use App\OfficialDocument;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function index() {
        $categories = DocumentCategory::select('id', 'category')->get();
        return view('pages/official_documents')->with('categories', $categories);
    }

    public function getFiles(Request $request) {
        if (!empty(trim($request->category))) {
            $files = OfficialDocument::select('file_name', 'category_id')->where('category_id', $request->category)->get();
            return response()->json($files);
        }
    }
}
