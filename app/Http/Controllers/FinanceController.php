<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;
use App\Models\Salary;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function index()
    {
        
        $allwages = Salary::all()->where('payroll_status', '0');
        $total_salaries_tobe_paid = 0;



        

        return view('Finance.Finance',[
            "title" => "Finance",
            "data" => Finance::all()
        ]);
    }
   

}
