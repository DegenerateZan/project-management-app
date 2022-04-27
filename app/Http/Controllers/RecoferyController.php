<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecoferyController extends Controller
{
   public function index(){
    return view('recovery.recovery',[

        "title" => "Recofery"
    ]);
   }




   public function codeverify(){
    return view('recovery.codeverify',[

        "title" => "Recofery"
    ]);
   }




   public function resetpassword(){
    return view('recovery.resetpassword',[

        "title" => "Recofery"
    ]);
   }
}
