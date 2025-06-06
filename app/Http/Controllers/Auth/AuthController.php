<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    // Login
    public function index()
    {
        
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $authLogin = User::where('email', $request->email)->first();

        if ($authLogin && Hash::check($request->password, $authLogin->password)) {
            Auth::login($authLogin);
            Session::put('loginId', $authLogin->id);
            return redirect()->route('student.viewAll')->with('success', 'Login successfully!');
        } else {
            return back()->with('fail', 'Failed to login! Please check your credentials if they are correct');
        }
    }

    
    
}
