<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatformController extends Controller
{
   public function index()
   {
       return view('Platform.Platform',[
           "title" => "platform"
       ]);
   }
}
