<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Platform;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Prophecy\Call\Call;

class ProjectController extends Controller
{
    public function index()
    {
        return view('Project.Project',[
            'title' => 'project',
            'projects' => Project::with('category')->with('client')->get(),
            'clients' => Client::all(),
            'categories' => Category::all(),
            'platforms' => Platform::all()
        ]);
    }
    public function getProject($id){

       //$a = var_dump($request);
       $resultget = Project::find($id);
       echo json_encode($resultget);
   }
    public function store(Request $request)
    {
    
        // dd($request);
        
        $request->validate([
            'client_id' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'name' => 'required',
            'manufacture_date' => 'required',
            'price' => 'required',
            'deadline' => 'required',
            'manufacture_date' => 'required'
         ]); 

         $project = new Project();
         $project->client_id = $request->client_id;
         $project->category_id = $request->category_id;
         $project->name = $request->name;
         $project->manufacture_date = $request->manufacture_date;
         $project->status = $request->status;
         $project->price = $request->price;
         $project->deadline = $request->deadline;

        
      if ($project->save()) {
        return redirect('/projects')->with('success', 'Projects Created Successfully!');
        
     }else{

         return redirect('/projects')->with('toast_erro', 'Client Failed Created!');
     }
     }
     public function delete($id)
     {
        //  dd($id);
         $project = Project::find($id);
         if ($project->delete()) {
            return redirect('/projects')->with('toast_success', 'Projects delete Successfully!');
            
         }else{
    
             return redirect('/projects')->with('toast_erro', 'Client Failed Delete!');
         }
     }
    
}
