<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Salary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FinanceController extends Controller
{
    public function index()
    {
        
        
       $debit = Finance::all()->where('mutation', 'Debit')->sum('amount'); 
       $credit = Finance::all()->where('mutation', 'Credit')->sum('amount');
       $total = $debit - $credit;
        return view('Finance.Finance',[
            "title" => "Finance",
            "data" => Finance::all(),
            "debit" => $debit,
            "credit" => $credit,
            "total" => $total
           
        ]);
    }
  
   

}
