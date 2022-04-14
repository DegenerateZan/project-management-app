<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecoferyController extends Controller
{
   public function index(){
    return view('recovery.recovery',[
        "title" => "recovery"
    ]);
   }
}
