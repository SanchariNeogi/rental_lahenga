<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function changePassword()
    {
        return view('admin.change_password');
    }
    public function changePasswordSubmit(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);
        if (!(Hash::check($request->input('old_password'), Auth::guard('admin')->user()->password))) {
            return back()->with('error', 'Your old password does not match !');
        }
        if (strcmp($request->input('old_password'), $request->input('new_password')) == 0) {
            return back()->with('error', 'New password cannot be same as your old password !');
        }
        if (strcmp($request->input('new_password'), $request->input('confirm_password')) != 0) {
            return back()->with('error', 'New and Re-Password does not match !');
        }
        $user = Auth::guard('admin')->user();
        $user->password = bcrypt($request->input('new_password'));
        $user->save();
        return back()->with('success', 'Your account password changed successfully.');
    }
}
