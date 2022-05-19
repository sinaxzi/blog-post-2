<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

        return view('auth.register');
        
    }

    public function store(Request $request){
        //validation
        
        $fields = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|',
            'email' => 'required|max:255|email',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $fields['name'],
            'username' => $fields['username'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password']),
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('home');
    }
}
