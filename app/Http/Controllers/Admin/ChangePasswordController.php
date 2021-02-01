<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class ChangePasswordController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function index() {
        return view('admin/user-settings');
    }

    public function changePassword(Request $request) {
        $request->validate([
            'old_password' => 'required|min:8|max:255',
            'new_password' => 'required|min:8|max:255|confirmed',
        ]);

        $id = Auth::id();
        $user = User::find($id);
        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            if ($user->save()) {
                return redirect('/admin')->with('message', 'Account successfully updated');
            }
            else {
                abort(404);
            }
        }
        else {
            return back()->withErrors(['old_password'=>'Password does not match.']);
        }
    }
}
