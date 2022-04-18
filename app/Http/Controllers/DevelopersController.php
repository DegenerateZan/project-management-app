<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use Illuminate\Http\Request;

class DevelopersController extends Controller
{
   public function index()
   {

    $developer = Developers::all();

    return view('developer.developer',[
        "title" => "Developer",
        "developers" => $developer
    ]);
   }
}
