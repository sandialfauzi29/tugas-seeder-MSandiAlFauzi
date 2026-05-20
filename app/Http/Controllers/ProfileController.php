<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required'],
            'email' => ['required','email']
        ]);

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);

        return back();
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->user()->delete();

        return redirect('/');
    }
}