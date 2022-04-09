<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'username' => ['required', 'string', 'min:3', 'max:25'],
            'name' => ['required', 'string', 'min:3', 'max:191'],
            'password' => ['required', ],
        ]);

        User::create([
            'email' => $request->email,
            'username' => $request->username,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return "berhasil";
    }
}
