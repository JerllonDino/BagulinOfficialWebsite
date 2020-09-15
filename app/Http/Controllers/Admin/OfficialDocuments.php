<?php

namespace App\Http\Controllers\Admin;

use App\DocumentCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OfficialDocument;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Block\Element\Document;

class OfficialDocuments extends Controller
{
    public function index($category = NULL) {
        $category_name = DocumentCategory::select('id', 'category')->where('id', $category)->first();
        $official_documents = OfficialDocument::select('id', 'category_id', 'file_name')
                                            ->when($category, function($query) use ($category) {
                                                return $query->where('category_id', $category);
                                            })
                                            ->paginate(10);

        $document_categories = DocumentCategory::select('id','category')->get();

        return view('admin/documents-management')
                ->with('categories', $document_categories)
                ->with('documents', $official_documents)
                ->with('folder', $category_name == null ? 'All' : $category_name->category)
                ->with('category_id', isset($category_name->id) ? $category_name->id : null);
    }

    public function addCategory(Request $request) {
        $request->validate([
            "new_category" => 'required'
        ]);

        $category = new DocumentCategory;
        $category->category = $request->new_category;
        $category->save();

        return response()->json([
            "link" => $category->id
        ]);
    }

    public function deleteCategory(Request $request) {
        $request->validate([
            'category_id' => 'required'
        ]);

        $category = DocumentCategory::find($request->category_id);
        OfficialDocument::where('category_id', $request->category_id)->delete();
        Storage::disk('public')->deleteDirectory("official-documents/$request->category_id/");
        $category->delete();
    }

    public function save(Request $request) {
        $request->validate([
            'category' => 'required'
        ]);

        $this->storeDocuments($request->uploads, $request->category);
    }

    public function rename(Request $request) {
        $request->validate([
            'rename_to' => 'required',
            'id' => 'required'
        ]);

        $old_file = OfficialDocument::select('category_id', 'file_name')->where('id', $request->id)->first();
        $extension = explode('.',$old_file->file_name)[1];
        $new_filename =  time() . rand(11, 99) . '_' . str_replace('_', '-', $request->rename_to) . ".$extension";

        Storage::disk('public')->move(
            'official-documents/' . $old_file->category_id. "/". $old_file->file_name,
            'official-documents/' . $old_file->category_id. "/". $new_filename);
        OfficialDocument::where('id', $request->id)->update(['file_name'=>$new_filename]);
    }

    public function delete(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);

        $document = OfficialDocument::find($request->id);
        if ( Storage::disk('public')->delete( 'official-documents/' . $document->category_id . '/' . $document->file_name) ) {
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
                $fileName =  time() . rand(11, 99) . '_' . str_replace('_', '-', $document['fileName']);

                if ($decoded !== FALSE) {
                    $result = Storage::disk('public')->put( 'official-documents/' . $category . '/' . $fileName, $decoded['contents']);
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

    public function renameCategory(Request $request) {
        $request->validate([
            'id' => 'required',
            'rename_to' => 'required'
        ]);

        DocumentCategory::where('id', $request->id)->update(['category' => $request->rename_to]);
    }
}
