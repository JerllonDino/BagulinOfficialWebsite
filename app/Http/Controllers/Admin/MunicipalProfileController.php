<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MunicipalProfile;
use App\MunicipalProfileCategory;
use Illuminate\Support\Facades\Storage;

class MunicipalProfileController extends Controller
{
    protected $category_ids = array('population', 'infrastructure', 'health', 'educational', 'local-institutional');

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index($category = NULL) {
        $category_name = MunicipalProfileCategory::select('id', 'category')->where('id', $category)->first();
        $official_documents = MunicipalProfile::select('id', 'category_id', 'file_name')
                                            ->when($category, function($query) use ($category) {
                                                return $query->where('category_id', $category);
                                            })
                                            ->paginate(10);

        $document_categories = MunicipalProfileCategory::select('id','category')->get();

        return view('admin/municipal-profile-management')
                ->with('categories', $document_categories)
                ->with('documents', $official_documents)
                ->with('folder', $category_name == null ? 'All' : $category_name->category)
                ->with('category_id', isset($category_name->id) ? $category_name->id : null);
    }

    public function get_index($category) {
        $id = array_search($category, $this->category_ids);
        return $id += 1;
    }

    public function save(Request $request) {
        $request->validate([
            'category' => 'required'
        ]);

        $id = $request->category;
        if ( $id !== FALSE ) {
            $this->storeDocuments($request->uploads, $id, $id);
        }
        else {

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

    public function storeDocuments($documents, $category, $id) {
        if ( !empty($documents) ) {
            $documents = json_decode($documents, true);
            $data = array();
            foreach ($documents as $document) {
                $decoded = $this->decodeBase64($document['base64']);
                $fileName =  time() . rand(11, 99) . '_' . str_replace('_', '-', $document['fileName']);

                if ($decoded !== FALSE) {
                    $result = Storage::disk('public')->put( 'municipal-profile/' . $category . '/' . $fileName, $decoded['contents']);
                    if ($result) {
                        $data[] = array(
                            'category_id' => $id,
                            'file_name' => $fileName
                        );
                    }
                }
            }
            MunicipalProfile::insert($data);
        }
    }

    public function delete(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);

        $document = MunicipalProfile::find($request->id);
        if ( Storage::disk('public')->delete( 'municipal-profile/' . $document->category_id . '/' . $document->file_name) ) {
            $document->delete();
        }
    }

    public function rename(Request $request) {
        $request->validate([
            'rename_to' => 'required',
            'id' => 'required'
        ]);

        $old_file = MunicipalProfile::select('category_id', 'file_name')->where('id', $request->id)->first();
        $extension = explode('.',$old_file->file_name)[1];
        $new_filename =  time() . rand(11, 99) . '_' . str_replace('_', '-', $request->rename_to) . ".$extension";

        Storage::disk('public')->move(
            'municipal-profile/' . $old_file->category_id . "/" . $old_file->file_name,
            'municipal-profile/' .  $old_file->category_id . "/" . $new_filename);
        MunicipalProfile::where('id', $request->id)->update(['file_name'=>$new_filename]);
    }

    public function addCategory(Request $request) {
        $request->validate([
            "new_category" => 'required'
        ]);

        $category = new MunicipalProfileCategory;
        $category->category = ucwords($request->new_category);
        $category->save();

        return response()->json([
            "link" => $category->id
        ]);
    }

    public function deleteCategory(Request $request) {
        $request->validate([
            'category_id' => 'required'
        ]);

        $category = MunicipalProfileCategory::find($request->category_id);
        MunicipalProfile::where('category_id', $request->category_id)->delete();
        Storage::disk('public')->deleteDirectory("municipal-profile/$request->category_id/");
        $category->delete();
    }

    public function renameCategory(Request $request) {
        $request->validate([
            'id' => 'required',
            'rename_to' => 'required'
        ]);

        MunicipalProfileCategory::where('id', $request->id)->update(['category' => $request->rename_to]);
    }
}
