<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{

    public function create()
    {

        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            return back()->withInput()->withErrors(['email' => 'Provided credentials could not be verified.']);
        }

        session()->regenerate();
        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You have been logged out!');
    }
}
