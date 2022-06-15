<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return '123';// view('auth.login');
    }

    public function login_user(Request $request)
    {
        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields))
        {
            return redirect()->intended('/');
        }

        return redirect('login')->withErrors([
            'formData' => 'Данные не прошли проверку. Попробуйте заново!'
        ]);
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
