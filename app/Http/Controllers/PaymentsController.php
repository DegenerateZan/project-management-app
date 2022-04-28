<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Project;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Json;

class PaymentsController extends Controller
{
   public function index()
   {

    return view('Payment.Payment',[
        "title" => "Payments",
        "projects" => Project::all(),
        "users" => User::all(),
        "payments" => Payment::all()
    ]);
   }
   public function store(Request $request)
   {
       $request->validate([
           "project_id" => "required",
           "user_id" => "required"
       ]);

       $paymnets = new Payment();
       $paymnets->project_id = $request->project_id;
       $paymnets->user_id = $request->user_id;
       $paymnets->amount = $request->amount;
       $paymnets->date = $request->date;
       $paymnets->status = $request->status;
       $paymnets->description = $request->description;
       if ($paymnets->save()) {
        return redirect('/payments')->with('success', ' Data Payment Created Successfully!');    
       }
   }
   public function delete($id){
       $paymnets = Payment::find($id);
       if ($paymnets->delete()) {
        return redirect('/payments')->with('toast_success', ' Data Payments Deleted Successfully!'); 
       }
   }
   public function update(Request $request, $id){
       $payments = Payment::find($id);
       if ($payments->update($request->all())) {
        return redirect('/payments')->with('toast_success', ' Data Payments Update Successfully!');
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
