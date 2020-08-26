<?php

namespace App\Http\Controllers\Admin;

use App\DocumentCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OfficialDocument;
use Illuminate\Support\Facades\Storage;

class OfficialDocuments extends Controller
{
    public function index($category = NULL) {
        $official_documents = OfficialDocument::select('id', 'category_id', 'file_name')
                                            ->when($category, function($query) use ($category) {
                                                return $query->where('category_id', $category);
                                            })
                                            ->get();

        $document_categories = DocumentCategory::select('id','category')->get();

        return view('admin/documents-management')
                ->with('categories', $document_categories)
                ->with('documents', $official_documents)
                ->with('folder', $category == NULL ? 'All' : $category);
    }

    public function save(Request $request) {
        $request->validate([
            'category' => 'required'
        ]);

        $this->storeDocuments($request->uploads, $request->category);
    }

    public function delete(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);

        $document = OfficialDocument::find($request->id);
        if ( Storage::disk('public')->delete( $document->category_id . '/' . $document->file_name) ) {
            $document->delete();
        }
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

    public function storeDocuments($documents, $category) {
        if ( !empty($documents) ) {
            $documents = json_decode($documents, true);
            $data = array();
            foreach ($documents as $document) {
                $decoded = $this->decodeBase64($document['base64']);
                $fileName =  time() . rand(11, 99) . '_' . str_replace(' ', '-', $document['fileName']);

                if ($decoded !== FALSE) {
                    $result = Storage::disk('public')->put( $category . '/' . $fileName, $decoded['contents']);
                    if ($result) {
                        $data[] = array(
                            'category_id' => $category,
                            'file_name' => $fileName
                        );
                    }
                }
            }
            OfficialDocument::insert($data);
        }
    }
}
