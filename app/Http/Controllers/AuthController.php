<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

   public function authentication(Request $request)
   {
    $credentials= $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }
Session::flash('status', 'failed');
Session::flash('message', 'login salah');
return redirect('/login');
   }
   public function logout(Request $request)
   {
    Auth::logout();
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
   }
   function register(){
    return view ('register');
   }
   function create(Request $request) {
    Session::flash('name', $request->name);
    Session::flash('email', $request->email);

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6'
    ], [
        'name.required' => 'name wajib diisi',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'silakan masukkan email yg valid',
        'email.unique' => 'silakan pilih email yg lain',
        'password.required' => 'Password wajib diisi',
        'password.mon' => 'minimum 6 karakter'
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ];
    User::create($data);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];
     if (Auth::attempt($infologin)) {
        return redirect('')->with('success', 'Berhasil login');
    } else {
        return redirect('login')->withErrors('Username dan password yang dimasukkan tidak sesuai');
}

}

}
// class Authorization extends Controller
// {
//     public function redirectToGoogle()
//     {
//         return Socialite::driver('google')->redirect();
//     }
//     public function handleGoogleCallback()
//     {
//         $user = Socialite::driver('google')->user();

//         return redirect('/');
//     }
// }
