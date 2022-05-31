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
            "url" => "/projects/pdf_document_project_all",
            "title" => 'Reports',
            "projects" => $projects,
            "payments_data" => $payments_array
             

        ]);
    }
    // salary
    public function TransactionSalary()
    {
        $salary = Salary::with('developer')->get();
        return view('repost.transaction-salary',[
            "url" => "/salary/pdf_all",
            "title" => 'Transaction Salary',
            "data" => $salary
        ]);
    }
    // projects
    public function TransactionPorject()
    {
        $payment = Payment::with('project')->get();
        return view('repost.transaction-project',[
            "url" => "/payments/pdfpayments_all",
            "title" => 'Transaction Project',
            "data" => $payment
        ]);
    }
    // paidoff and not paidoff project transaction
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
    // paidoff and not paidoff salary
    public function BasBeenPaids()
    {
        return view('repost.transaction-salary',[
            "url" => "/salary/pdf_paid_off",
            "title" => "Trasanction Salary",
            "data" =>  Salary::with('developer')->where('payroll_status', 1)->get()
        ]);
    }
    public function HaventPaidYets()
    {
        return view('repost.transaction-salary',[
            "url" => "/salary/pdf_not_paid_off",
            "title" => "Trasanction Salary",
            "data" => Salary::with('developer')->where('payroll_status', 0)->get()
        ]);
    }  
    // paidoff and not paidoff project 
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
            "url" => "/projects/pdf_document_project_paidoff",
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
            "url" => "/projects/pdf_document_project_not_paidoff",
            "title" => 'Reports',
             "projects" => $projects,
             "payments_data" => $payments_array,

             

        ]);
    }
    // pdf convert
    
    public function pdf_document_payments_all()
    {
        $data = Payment::with('project')->get();
        $pdf = PDF::loadView('repost.pdf.transaction-payments-all',["data" => $data]);
        return $pdf->stream();
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
        $pdf = PDF::loadView('repost.pdf.transaction-payments-notyetpaidoff',["data" => $data]);
        return  $pdf->stream();
    }
    public function pdf_document_salary_all()
    {
        $data = Salary::with('developer')->get();
        $pdf = PDF::loadVIew('repost.pdf.transaction-salary', ['data' => $data]);
        return $pdf->stream(); 
    }

    public function pdf_document_salary_paid_off()
    {
        $data = Salary::with('developer')->where('payroll_status',1)->get();
        $pdf = PDF::loadView('repost.pdf.transaction-salary-paidoff',["data" => $data]);
        return $pdf->stream();

    }
    public function pdf_document_salary_not_paid_off()
    {
        $data = Salary::with('developer')->where('payroll_status', 0)->get();
        $pdf = PDF::loadView('repost.pdf.transaction-salary-not-paidoff',["data" => $data]);
        return $pdf->stream();
    }




    public function pdf_documnent_project()
    {
       $project = Project::all();
       $payments_count = Payment::where('status', 1)->count();
       $payments = Payment::all();
       $loop = 1;
       if ($payments_count > 0) {
          
       }else {
        return redirect('/Reports')->with('toast_error', 'Not Transaction!'); 
       }
       foreach ($payments as $payment) {
             $id_p = $payment->project_id;
             $payment_array[$id_p][$loop] = $payment->amount;
             $loop++;  
            }
            $pdf = PDF::loadView('repost.pdf.transaction-project_all',[
                "projects" => $project,
                "payment_data" => $payment_array
            ]); 
            return $pdf->stream();
    
    }
    public function pdf_documnent_project_not_paidoff()
    {
        $project = Project::where('status_payments', 0)->get();
        // dd($project);
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
            $pdf = PDF::loadView('repost.pdf.transaction-project-not-paidoff',[
                "payments_data" => $payments_array,
                "projects" => $project,
                "title" => "pdf_documnent_project_not_paidoff"
            ]);
            return $pdf->stream();
        
    }
    public function pdf_documnent_project_paidoff()
    {
        $project = Project::where('status_payments', 1)->get();
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
            $pdf = PDF::loadView('repost.pdf.transaction-project-paidoff',[
                "payments_data" => $payments_array,
                "projects" => $project,
                "title" => "pdf_documnent_project_paidoff"
            ]);
            return $pdf->stream();
        
    }

 
 
}
