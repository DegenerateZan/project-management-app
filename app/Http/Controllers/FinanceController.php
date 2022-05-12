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
        
        
        $payments = DB::table('payments')->where('status', 1)->sum('amount');
        $salary = DB::table('salaries')->where('payroll_status', 1)->sum('total_salary_received');
        $total = $payments - $salary;
        // dd($total);
        return view('Finance.Finance',[
            "title" => "Finance",
            "data" => Finance::all(),
            "payments" => $payments,
            "salary" => $salary,
            "total" => $total
        ]);
    }
    public function getdatapayment(){
        $payments = DB::table('payments')->where('status', 1)->sum('amount');
        echo json_decode($payments);
    }
    public function store(Request $request){
        dd($request);
    }
   

}
