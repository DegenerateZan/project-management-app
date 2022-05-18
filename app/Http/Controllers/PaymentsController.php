<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use App\Models\Payment;
use App\Models\Project;
use DateTime;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Json;

class PaymentsController extends Controller
{
    public function show($parameter){
        $project = Project::find($parameter);
        $projects = Project::all()->where('id', $parameter);
        $payments = Payment::all()->where('project_id', $parameter);
        $p_date = date_format(new DateTime($project['deadline']), 'd M Y');
    
        $now = new DateTime();
    
        if($p_date < $now) {
        $p_late = true;
    }
    
        return view('payment.payment',[
          'project' => $project,
          'projects' =>$projects, // tampil 1 dari projectooping milih project
          'title' => 'Payments',
          'payments' => $payments,
          'string_date' => $p_date,
          'bool_deadline_project'=> $p_late
        ]);
    
      }
    
    
    
    
      public function false(){
        echo "
          <script>
              alert('Warning! you need to choose which project first to show Payments!');
              window.location.href = '/projects'
          </script>
    
        ";
        die;
      }


   public function store(Request $request)
   {
    //    dd($request);
       $request->validate([
           "project_id" => "required",
           "user_id" => "required"
       ]);
       
          $slug = random_int(100000, 999999);
          $payments = new Payment();
          $payments->project_id = $request->project_id;
          $payments->slug_pembayaran = $slug ;
          $payments->user_id = $request->user_id;
          $payments->amount = $request->amount;
          $payments->date = $request->date;
          $payments->status = $request->status;
          $payments->description = $request->description;
        //   dd($payments);
          $payments->save();
         
        $id = $payments->id;
        $data = Payment::find($id);
        $status = $data->status;
        if ($status === 1) {   
            $finance = new Finance();
            $finance->code_debit_credit = $data->slug_pembayaran;
            $finance->amount = $request->amount;
            $finance->mutation = 'Debit';
            $finance->description = $request->description;
            $finance->date = $request->date; 
            $finance->save();
            return redirect('/payments/from_project/'. $request->project_id )->with('success', ' Data Payment Created Successfully!');
        }else{
            return redirect('/payments/from_project/'. $request->project_id )->with('success', ' Data Payment Created Successfully!');
        }
       
        
        
       
       
   }
   public function getdatapayment(){
       $payments = DB::table('payments')->where('status', 1)->sum('amount');
       echo json_decode($payments);
   }
   
   public function delete($id){
       $paymnets = Payment::find($id);
       $data = $paymnets->slug_pembayaran;
       $finance = Finance::where('code_debit_credit', $data);
       $finance->delete();
       if ( $paymnets->delete() ) {
           return redirect('/payments/from_project/'. $paymnets->project_id )->with('success', ' Data Payment Deleted Successfully!');
       }
        
       
   }
   public function update(Request $request, $id){
       $payments = Payment::find($id);
       $idP = $payments->id;
       $payments->update($request->all());
       $data = Payment::find($idP);
       $status = $data->status;
       if ($status === 0) {
           $finance1 = Finance::where('code_debit_credit',$request->code_debit_credit);
           $finance1->delete();
           return redirect('/payments/from_project/'. $request->project_id)->with('toast_success', ' Data Payments Update Successfully!'); 
       }
       if ($status === 1) {
        $finance = new Finance();
        $finance->code_debit_credit = $request->code_debit_credit;
        $finance->amount = $request->amount;
        $finance->mutation = 'Debit';
        $finance->description = $request->description;
        $finance->date = $request->date;
        $finance->save();
        $slug_pembayaran = $finance->code_debit_credit;
        $finance = Finance::where('code_debit_credit', $slug_pembayaran)->latest()->count();
        if ($finance > 1 ) {
            $valid = Finance::where('code_debit_credit', $slug_pembayaran)->first();
            $valid->delete();
        }
        return redirect('/payments/from_project/'. $request->project_id)->with('toast_success', ' Data Payments Update Successfully!'); 
    }

   }
   public function getdataPayments($id)
   {
       $payments = Payment::find($id);
       return json_encode($payments);
   }
   public function getPaymentsByidproject($id)
   {
       $payments = Payment::where('project_id', $id)->count();
       echo json_encode($payments);
   }
  
}
