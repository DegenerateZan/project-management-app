<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {

      
      return view('salary.salary',[
          "title" => "salary",
          // "datasalary" => 

          
      ]);



    }
}
