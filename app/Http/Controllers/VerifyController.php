<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class VerifyController extends Controller
{
    public function index()
    {
        return view('Recovery.Codeverify',[
            "title" => "Recovery"
          
        ]);
        
    }
}
