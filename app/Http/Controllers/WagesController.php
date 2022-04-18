<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WagesController extends Controller
{
    public function index()
    {
      return view('wages.wages',[
          "title" => "Wages"
          
      ]);

      // this is a mistake btw
    }
}
