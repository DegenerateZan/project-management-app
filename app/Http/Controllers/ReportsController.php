<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Project;
use App\Models\Salary;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
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
            "url" => "/payments/pdfpayments_all",
            "title" => 'Transaction Project',
            "data" => $payment
        ]);
    }
    public function HaventPaidYetp()
    {
        return view('repost.transaction-project',[
            "title" => "Trasanction Project",
            "url" => "/payments/pdfpayments_notpaidoff",
            "data" => Payment::with('project')->where('status', 0)->get()
        ]);
    }
    public function BasBeenPaidp()
    {
        return view('repost.transaction-project',[
            "url" => "/payments/pdfpayments_paidoff",
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
        $projects = Project::where('status_payments', 1)->get();
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
             "payments_data" => $payments_array,
             
             

        ]);
    }
    public function NotYetPaidOff()
    {
        $projects = Project::where('status_payments', 0)->get();
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
             "payments_data" => $payments_array,

             

        ]);
    }
    
    public function pdf_document_payments_all()
    {
        $data = Payment::with('project')->get();
        $pdf = PDF::loadView('repost.pdf.transaction-payments-all',["data" => $data]);
        return $pdf->download('payments_all.pdf');
    }
    public function pdf_document_payments_paidoff()
    {
        $data = Payment::with('project')->where('payments.status', 1)->get();
        $pdf = PDF::loadView('repost.pdf.transaction-payments-paidoff',["data" => $data]);
        return $pdf->stream();
    }
    public function pdf_document_payments_notpaidoff()
    {
        $data = Payment::with('project')->where('payments.status', 0)->get();
        $pdf = PDF::loadView('repost.pdf.transaction-payments-paidoff',["data" => $data]);
        return $pdf->stream();
    }
 
 
}
