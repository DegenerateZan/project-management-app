<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Models\Finance;
use App\Models\Project;
use App\Models\Developers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
 public function index()
 {


    // set dashboard tasks %
    $tasksfinish = Tasks::where('task_status', 'Finish')->count();
    $taskall = Tasks::all()->count();
    if ($taskall > 0) {
        $result = $tasksfinish / $taskall * 100;
        $total = ceil($result);
    }else{
        $total = 0;
    }
    $finance = Finance::where('mutation', 'Debit')->latest()->first();



    return view('Dashboard.Dashboard',[
        "title" => "Dashboard",
        "project" => Project::all(),
        "totalprojects" => Project::count(),
        "developers" => Developers::count(),
        "finances" => $finance,
        "task" => $total,
        "tasks" =>Tasks::all()
        
         

    ]);
 }
}
