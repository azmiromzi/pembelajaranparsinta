<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
      $validasi =  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);



        if(Auth::attempt($validasi)) {
            return redirect('/')->with('success', "hallo " . Auth::user()->name . " welcome to your account");
        }


        // if ($user)
        // {
        //     if(Hash::check($request->password, $user->password))
        //     {
        //         Auth::login($user);

        //         return redirect('/')->with('success', 'you are login');
        //     }
        // }
        throw ValidationException::withMessages([
            'email' => 'your email wrong'
        ]);
    }
}
