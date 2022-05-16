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
    public function formfinance(){
        return view('Finance.from-finances',[
            "title" => "From Finances"
        ]);
    }
    public function getdatasalary(){
        $salary = DB::table('salaries')->where('payroll_status', 1)->sum('total_salary_received');
        echo json_encode($salary);
    }

    public function getdatapayment(){
        $payments = DB::table('payments')->where('status', 1)->sum('amount');
        echo json_decode($payments);
    }
    public function store(Request $request){
        // dd($request);
       $finance = new Finance();
       $finance->amount = $request->amount;
       $finance->mutation = $request->mutation;
       $finance->description = $request->description;
       $finance->date = $request->date;
       $finance->save();
    }
  public function delete($id){

      $finance = Finance::find($id);
      if ($finance->delete()) {
        return redirect('/finances')->with('toast_success', ' Data Finance Deleted Successfully!'); 
      }

  }

}
