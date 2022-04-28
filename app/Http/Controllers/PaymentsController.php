<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Salary;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
   public function index()
   {

    return view('Payment.Payment',[
        "title" => "Payments",
        "projects" => Project::all(),
        "payments" => Salary::all()
    ]);
   }
}
