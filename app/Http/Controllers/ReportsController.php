<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Project;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function index(){

        $projects = Project::all();
        $payments_count = Payment::where('status', '1')->count();
        $payments = Payment::where('status', '1')->get();
        $loop = 1;

            if ($payments_count < 1){
            $payments_array = null;
            goto skip;
            }
            
            foreach($payments as $payment){
                
                $id_p = $payment->project_id; 
                $payments_array[$id_p][$loop] = $payment->amount;
                $loop++;
            }
            skip:
        return view('repost.reports',[

            "title" => 'Reports',
             "projects" => $projects,
             "payments_data" => $payments_array
             

        ]);
    }
    public function TransactionSalary()
    {
        $salary = Salary::with('developer')->get();
        return view('repost.transaction-salary',[
            "title" => 'Transaction Salary',
            "data" => $salary
        ]);
    }
    public function TransactionPorject()
    {
        $payment = Payment::with('project')->get();
        return view('repost.transaction-project',[
            "title" => 'Transaction Project',
            "data" => $payment
        ]);
    }
    public function HaventPaidYetp()
    {
        return view('repost.transaction-project',[

            "title" => "Trasanction Project",
            "data" => Payment::with('project')->where('status', 0)->get()
        ]);
    }
    public function BasBeenPaidp()
    {
        return view('repost.transaction-project',[

            "title" => "Trasanction Project",
            "data" => Payment::with('project')->where('status', 1)->get()
        ]);
    }
    public function BasBeenPaids()
    {
        return view('repost.transaction-salary',[

            "title" => "Trasanction Salary",
            "data" =>  DB::table('salaries')->join('developers', 'salaries.developer_id', '=' , 'developers.id')->select('developers.name_developer','salaries.payroll_date', 'salaries.total_salary_received', 'salaries.payroll_status')->where('salaries.payroll_status', '=' , 1)->get()
        ]);
    }
    public function HaventPaidYets()
    {
        return view('repost.transaction-salary',[

            "title" => "Trasanction Salary",
            "data" => DB::table('salaries')->join('developers', 'salaries.developer_id', '=' , 'developers.id')->select('developers.name_developer','salaries.payroll_date', 'salaries.total_salary_received', 'salaries.payroll_status')->where('salaries.payroll_status', '=' , 0)->get()
        ]);
    }
    public function ProjectPaidOff()
    {
        return view('repost.reports',[

        ]);
    }
    public function NotYetPaidOff()
    {
        $projects = Project::all();
        $payments_count = Payment::where('status', '1')->count();
        $payments = Payment::where('status', '1')->get();
        $loop = 1;

            if ($payments_count < 1){
            $payments_array = null;
            goto skip;
            }
            
            foreach($payments as $payment){
                
                $id_p = $payment->project_id; 
                $payments_array[$id_p][$loop] = $payment->amount;
                $loop++;
            }
            $data = Project::all();
            // foreach ($data as $d) {
            //     $project = $d;
            // }

            skip:
        return view('repost.project-not-yet-paidoff',[

            "title" => 'Reports',
             "projects" => $projects,
             "payments_data" => $payments_array,
             "project" => $data

             

        ]);
    }

}
