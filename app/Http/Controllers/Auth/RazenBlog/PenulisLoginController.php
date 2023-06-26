<?php

namespace App\Http\Controllers\Auth\RazenBlog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenulisLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:penulis')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.penulis.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('penulis')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('razen-blog.penulis.dashboard.index'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('penulis')->logout();
        return redirect('/');
    }
}
