<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // Modificar el request
        $request->request->add(['username' => Str::slug($request->username)]);

        $request->validate([
            'name' => 'required|min:5',
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create(
            [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                // 'password' => Hash::make($request->password), use this for laravel 8.x and lower versions
                'password' => $request->password, // Laravel 10.x and highers versions auto hash passwords
            ]
        );
        // Auth user
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        // Another auth form
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('posts.index', auth()->user()->username);
    }
}