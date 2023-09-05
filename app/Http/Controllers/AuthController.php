<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('/member_registration'); // Redirect to a dashboard or another page
        }

        // Authentication failed...
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
