<?php

namespace App\Http\Controllers;

use App\Models\Developers;
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
      // $request->validate([
      //   // 'user_id' => 'required',
      //   'payroll_deducation' => 'required',
      //   'payroll_date' => 'required',
      //   // 'payroll_status' => 'required',
      // ]);

      $salary = new Salary();
      $salary->developer_id = $request->developer_id;
      $salary->salary_amount = $request->salary_amount;
      $salary->payroll_deducation = $request->payroll_deducation;
      $salary->payroll_status = $request->payroll_status;
      $salary->total_salary_received = $request->total_salary_received;
      $salary->overtime_money = $request->overtime_money;
      $salary->payroll_date = $request->payroll_date;

      if ($salary->save()) {
        return redirect('/salary')->with('toast_success', 'Data Salary Created Successfully!');       
      }
    }
    public function delete($id)
    {
      $data_salary = Salary::find($id);
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
  
     if($salary->update($request->all())){
      return redirect('/salary')->with('toast_success', 'Data Salary Update Successfully!');
     }
   }
}
