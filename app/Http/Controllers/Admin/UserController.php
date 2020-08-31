<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/user-management');
    }

    public function get(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $filter = $request->get('search');
        $search = (isset($filter['value'])) ? $filter['value'] : false;
        $columnIndex = $request->get('order')[0]['column'];
        $columnName = $request->get('columns')[$columnIndex]['data'];
        $columnSortOrder = $request->get('order')[0]['dir'];

        $total = User::select('id')->count();
        $data = $this->getUsers($start, $length, $search, $columnName, $columnSortOrder);

        $data = array(
            'draw'=>$draw,
            'recordsTotal'=>$total,
            'recordsFiltered'=>$total,
            'data'=>$data,
            'search' => $search
        );

        return response()->json($data);
    }

    public function store(Request $request) {
        $currentUser = Auth::user();
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('password123');
        $user->created_by = $currentUser->id;
        $user->save();
    }

    public function update(Request $request) {
        $currentUser = Auth::user();
        $request->validate([
            'id' => 'required',
            'name' => 'string',
            'email' => 'string|email'
        ]);

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->updated_by = $currentUser->id;
        $user->password = Hash::make('password123');
        $user->save();
    }

    public function delete(Request $request)
    {
        if (! empty($request->ids)) {
            foreach ($request->ids as $id) {
                User::find($id)->delete();
            }
        }
    }

    protected function getUsers($start, $length, $search, $columnName, $columnSortOrder)
    {
        $userId = Auth::user()->id;
        $user = User::where('name', 'like', '%' . $search . '%')
            ->where('id', '!=', $userId)
            ->with('created_by')
            ->with('updated_by')
            ->offset($start)
            ->limit($length)
            ->orderBy($columnName, $columnSortOrder)
            ->latest()
            ->get();

        return $user;
    }
}
