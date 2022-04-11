<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(RegisterRequest $request)
    {
        $attributes = $request->all();

        $attributes['password'] = Hash::make($request->password);

        User::create($attributes);



        return redirect('/')->with('success', 'thank you, you are now registerd');
    }
}
