<?php

namespace App\Http\Controllers;


use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.Login',[
            "title" => "Login"
    ]);
    }



public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'username' => 'required', 'username',
        'password' => 'required',
    ]);
    // var_dump(Auth::attempt($credentials));
    // var_dump($request);
    // die;
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();


        return redirect()->intended('')->with('toast_success', 'Login Successfully!');

    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}

public function logout()
{
    Auth::logout();

    request()->session()->invalidate();
    
    request()->session()->regenerateToken();

    return redirect('/login');
}
}
