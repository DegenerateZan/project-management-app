<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Models\Finance;
use App\Models\Project;
use App\Models\Developers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
 public function index()
 {


    

    $taskfinish = 0;
    $totaltasks = 0;
    
// pengkondisian jika ada project di table project
if(Project::count() != 0){
    //var_dump('table project ada!');

    //pencarian project yang tidak selesai
    $searchunfinishedproject = Project::where('status', '!=' , 'Finish')->get(['id']);
    //var_dump($searchunfinishedproject);
    
    // pengkondisian jika hasil pencarian project yang tidak selesai itu tidak 0 atau kosong 
if (Project::where('status', '!=' , 'Finish')->count() != 0){
    //var_dump('table project dimana selain finish ada!');

    // looping pencarian semua tasks dari project yang belum selesai
    foreach($searchunfinishedproject as $a){
        $id_p = $a['id'];
        //var_dump('id_project : '.$id_p);
        // pengkondisisan pencarian jika taks yag dimiliki project
        if(Tasks::where('project_id', '=', $id_p)->count() > 0 ){
            //var_dump('task denagn id project ini ada!');
        // dibawah yaitu logic untuk menghitung task 
        $countedrowfinished = Tasks::where('project_id', '=', $id_p)->where('task_status', '=' , 1)->count();
        $countedtotaltasks = Tasks::where('project_id', '=', $id_p)->count(); // mencari total task berdasarkan id tertentu

        //penambahan jumlah ke variable master dari hasil looping
        $taskfinish = $taskfinish + $countedrowfinished;
        $totaltasks = $totaltasks + $countedtotaltasks;
        }
    
    
    //var_dump( $taskfinish);
    //var_dump( $totaltasks);
    // untuk menghindari devision by zero error
    if($taskfinish != 0 && $totaltasks != 0){
    // diabwah adalah logic rumus mencari presentase
    $substasks = $taskfinish / $totaltasks * 100;
    } else {
        $substasks = 0;
    }
} // I know this is stupid and fucking retarded but i dont have choice bcus i have to chase deadline
 } else {
    $substasks = 0;
 }
} else {
    $substasks = 0;
 }

 $finnance_count = Finance::count();
 if ($finnance_count < 1){
    $finance_amount = 0;
    
    } else {
        $finance_amount = Finance::latest('updated_at')->first()->pluck('finance_amount');
    }

    return view('Dashboard.Dashboard',[
        "title" => "Dashboard",
        "project" => Project::all(),
        "totalprojects" => Project::count(),
        "developers" => Developers::count(),
        "finances" => $finance_amount,
        "substacks" => $substasks,
        "tasks" => Tasks::all()->where('task_status', '0')
        
         

    ]);
 }
}
