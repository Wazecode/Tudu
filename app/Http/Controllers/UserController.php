<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $req) {
        $incomingfields = $req->validate([
            'name' => ['required', 'min:3', 'max:10'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:20']
        ]);

        $incomingfields['password'] = bcrypt($incomingfields['password']);
        $user = User::create($incomingfields);
        auth()->login($user);

        return redirect('/');
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $req) {
        $incomingfields = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:20']
        ]);

        if(auth()->attempt(['email' => $incomingfields['email'], 'password' => $incomingfields['password']])) {
            $req->session()->regenerate();
        }

        return redirect('/');   
    }
}
