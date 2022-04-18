<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use App\Models\Finance;
use App\Models\Project;
use App\Models\tasks;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
 public function index()
 {

    $totaltasks = Tasks::all();
    $taskfinish = Tasks::where('status, 1')->get();
    $substasks = $taskfinish / $totaltasks * 100;

    // $developer =Developers::count();
    // dd($developer);
    return view('dashboard.dashboard',[
        "title" => "Dashboard",
        "project" => Project::count(),
        "projectall" => Project::all(),
        "developers" => Developers::count(),
        "finances" => Finance::all(),
        "tasks" => $substasks
         

    ]);
 }
}
