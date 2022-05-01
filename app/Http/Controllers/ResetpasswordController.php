<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;

use Illuminate\Support\Facades\DB;
use App\Models\Codeverify;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ResetpasswordController extends Controller
{
    public function index($token){

        $email = Codeverify::where("token",$token)->count();
        
        if ($email > 0){
            $email = Codeverify::where('token', $token)->pluck('email');
            $email = $email[0];
            // view
            return view('Recovery.Resetpassword',[
                'email' => $email,
                'token' => $token
            ]);

        } else {
  return redirect('/recovery')->withErrors([
    'email' => 'Token is invalid or has been expired please Re-Send the email',
]) ;

        }
        // return view ('recovery.Resetpassword');
    }
    public function updatePassword(Request $request)
    {
       
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
         

        ]);

        if($request->password_confirmation != $request->password ){
            Session::flash('status','the value of 2 inputs are not the same!'); 
            return back();

        }
        
        $updatePassword = Codeverify::all()
                            ->where(['email' => $request->email, 'token' => $request->token])
                            ->first();

        if($updatePassword < 0){
            return back()->withInput()->with('error', 'Invalid token!');
        }
          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

          DB::table('password_resets')->where(['email'=> $request->email])->delete();
          Session::flash('resetstatus');

          return redirect('/login');
    }

}
