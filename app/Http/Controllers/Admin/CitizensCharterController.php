<?php

namespace App\Http\Controllers\Admin;

use App\CitizensCharterFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CitizensCharterController extends Controller
{
    protected $category_ids = array('services', 'forms');

    public function index($category = 'forms') {
        $category = strtolower($category);
        $id = $this->get_index($category);

        if ( $id !== FALSE ) {
            $documents = CitizensCharterFile::select('id', 'file_name')->where('category_id', $id)->paginate();
            return view('admin/citizens-charter-management')
                    ->with('category', ucfirst($category))
                    ->with('documents', $documents);
        }
        else {
            return abort(404);
        }
    }

    public function get_index($category) {
        $id = array_search($category, $this->category_ids);
        return $id += 1;
    }

    public function save(Request $request) {
        $request->validate([
            'category' => 'required'
        ]);

        $category = strtolower($request->category);
        $id = $this->get_index($category);
        if ( $id !== FALSE ) {
            $this->storeDocuments($request->uploads, $category, $id);
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
                    $result = Storage::disk('s3')->put( 'citizens-charter/' . $category . '/' . $fileName, $decoded['contents']);
                    if ($result) {
                        $data[] = array(
                            'category_id' => $id,
                            'file_name' => $fileName
                        );
                    }
                }
            }
            CitizensCharterFile::insert($data);
        }
    }

    public function delete(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);

        $document = CitizensCharterFile::find($request->id);
        if ( Storage::disk('s3')->delete( 'citizens-charter/' . $this->category_ids[$document->category_id - 1] . '/' . $document->file_name) ) {
            $document->delete();
        }
    }

    public function rename(Request $request) {
        $request->validate([
            'rename_to' => 'required',
            'id' => 'required'
        ]);

        $old_file = CitizensCharterFile::select('category_id', 'file_name')->where('id', $request->id)->first();
        $extension = explode('.',$old_file->file_name)[1];
        $new_filename =  time() . rand(11, 99) . '_' . str_replace('_', '-', $request->rename_to) . ".$extension";

        Storage::disk('s3')->move(
            'citizens-charter/' .  $this->category_ids[$old_file->category_id - 1] . "/" . $old_file->file_name,
            'citizens-charter/' .  $this->category_ids[$old_file->category_id - 1] . "/" . $new_filename);
        CitizensCharterFile::where('id', $request->id)->update(['file_name'=>$new_filename]);
    }
}
