<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wages extends Controller
{
    public function index()
    {
        return view('salary.salary',[
            'title' => 'wages'
        ]);
    }
}
