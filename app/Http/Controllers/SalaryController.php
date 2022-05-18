<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use App\Models\Finance;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
     
     
      return view('salary.salary',[
          "title" => "Salary",
          "developers" => Developers::all(),          
          "salaries" => Salary::with('developer')->with('user')->get(),
          "users" => User::all()

      ]);
    }
    public function store(Request $request)
    {
      // dd($request);
      $request->validate([
        // 'user_id' => 'required',
        'payroll_deducation' => 'required',
        'payroll_date' => 'required',
        // 'payroll_status' => 'required',
      ]);
      // input salaries
      $slug = random_int(100000, 999999);
      $salary = new Salary();
      $salary->developer_id = $request->developer_id;
      $salary->slug_salaries = $slug;
      $salary->salary_amount = $request->salary_amount;
      $salary->payroll_deducation = $request->payroll_deducation;
      $salary->payroll_status = $request->payroll_status;
      $salary->total_salary_received = $request->total_salary_received;
      $salary->overtime_money = $request->overtime_money;
      $salary->payroll_date = $request->payroll_date;
      $salary->save();
      $id = $salary->id;
      $data = Salary::find($id);
      $status = $data->payroll_status;
      
      if ($status > 0) {

          $finance = new Finance();
          $finance->amount = $data->total_salary_received;
          $finance->code_debit_credit = $data->slug_salaries;
          $finance->description = 'Gaji Developer';
          $finance->mutation = 'Credit';
          $finance->date = $data->payroll_date;
          $finance->save();
          return redirect('/salary')->with('toast_success', 'Data Salary Created Successfully!');
      }else{
        return redirect('/salary')->with('toast_success', 'Data Salary Failed Created Successfully!');
      }
          // $finance = new Finance();
          // $finance->amount = $request->total_sa2+lary_received;
          // $finance->mutation = 'Credit';
          // $finance->date = $request->payroll_date;
          // $finance->code_debit_credit = $slug;
          // $finance->description = 'Gaji Developer';
          // $finance->save();
          // return 'oke';
          // die;
      
     
      
    }
    
    public function delete($id)
    {
      $data_salary = Salary::find($id);
      $slug_salaries = $data_salary->slug_salaries;
      $finance = Finance::where('code_debit_credit' , $slug_salaries)->count();
      if ($finance > 0) {
        $finance = Finance::where('code_debit_credit' , $slug_salaries);
        $finance->delete();
      }
      if($data_salary->delete()) {
        return redirect('/salary')->with('toast_success', 'Data Salary Deleted Successfully!');
      }
    }
   public function getsalaryById($id)
   {
     $salary = Salary::find($id);
     echo json_encode($salary);
   }
   public function update(Request $request ,$id)
   {
     $salary = Salary::find($id);
     $salary->update($request->all());
     $slug_salaries = $salary->slug_salaries;
     $status = $salary->payroll_status;
     
     if ($status > 0) {
       $add_finance = new Finance();
       $add_finance->amount = $salary->total_salary_received;
       $add_finance->date = $salary->payroll_date;
       $add_finance->description = 'Salary Developer';
       $add_finance->mutation = 'Credit';
       $add_finance->code_debit_credit = $slug_salaries;
       $add_finance->save();
       $code_credit = $add_finance->code_debit_credit;
       $count = Finance::where('code_debit_credit', $code_credit)->latest()->count();
       if ($count > 1) {
        $data = Finance::where('code_debit_credit', $code_credit)->first();
        $data->delete();
        return redirect('/salary')->with('toast_success', 'Data Salary Update Successfully!');
       }
      }
      

     
  
    //  if($salary->update($request->all())){
    //   return redirect('/salary')->with('toast_success', 'Data Salary Update Successfully!');
    //  }
   }
}
