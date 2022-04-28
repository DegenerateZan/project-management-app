<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function index()
    {
    
        return view('Finance.Finance',[
            "title" => "Finance",
            "data" => Finance::all()
        ]);
    }
   
    public function gotosetting(Request $request){

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
}
