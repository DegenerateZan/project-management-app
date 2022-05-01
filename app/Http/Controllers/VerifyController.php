<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Codeverify;


class VerifyController extends Controller
{
    public function index()
    {
        return view('Recovery.Codeverify',[
            "title" => "Recovery"
          
        ]);

    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'code' => 'required'
          

        ]);

        $email = $request->email;
        $code = $request->code;
        
         if (Codeverify::where('email', '=', $email)->where('code', '=' , $code)->count() > 0){
            //$token = Codeverify::find('code')->$code;
            $token = Codeverify::where('code', $code)->pluck('token');  

            $token = $token[0];

            return redirect('/resetpassword/' . $token);

         } else {
            return back()->withErrors([
                'code' => 'The provided code does not match!',
            ])->onlyInput('code');
         }


    }



}
