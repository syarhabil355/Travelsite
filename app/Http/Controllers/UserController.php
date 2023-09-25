<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function login()
    {
        return view('login/login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->level == 'ADMIN' || Auth::user()->level == 'SUPERADMIN') {
                return redirect('admin');
            }else{
               return redirect('home'); 
            }
            
        }
 
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('login/register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->jenkel = $request->jenkel;
        $user->notelp = $request->notelp;
        $user->alamat = $request->alamat;
        $user->level = $request->level;
        $user->save();

        return redirect('login')->with('success','Registered successfully');
    }

    public function logout() {
        Auth::logout();
        return Redirect('home');
    }
}
