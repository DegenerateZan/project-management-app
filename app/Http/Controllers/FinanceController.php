<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
    
        return view('Finance.Finance',[
            "title" => "Finance",
            "data" => Finance::all()
        ]);
    }
   
}
