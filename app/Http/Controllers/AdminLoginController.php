<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin');
    }
    public function ShowLogin() {
        return view('admin.login');
    }
    public function PostLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended('admin');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
