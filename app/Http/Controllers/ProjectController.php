<?php 
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Client;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller{

    public function index()
    {
        return view('project.project',[
            'title' => 'project',
            'projects' => Project::with('category')->with('client')->get(),
            'clients' => Client::all(),
            'categories' => Category::all(),
        ]);
    }
    public function getProjectByid($id)
    {
        $projects = Project::find($id);
        echo json_encode($projects);
    }
    public function delete($id)
    {
        $projects = Project::find($id);
        if($projects->delete()){
            return redirect('/projects')->with('toast_success', 'Projects Deleted Successfully!');  
        }
    }

    public function store(Request $request)
    {
        //  dd($request);
  
           $request->validate([
              'client_id' => 'required',
              'category_id' => 'required',
              'name' => 'required',
              'deadline' => 'required',
              'manufacture_date' => 'required',
              'status' => 'required',
              'price' => 'required'
           ]); 
  
  
           $projects = new Project();
  
           $projects->client_id = $request->client_id;
           $projects->category_id = $request->category_id;
           $projects->name = $request->name;
           $projects->status = $request->status;
           $projects->deadline = $request->deadline;
           $projects->price = $request->price;
           $projects->manufacture_date = $request->manufacture_date;

  
         
          if ($projects->save()) {
           return redirect('/projects')->with('toast_success', 'Projects Created Successfully!');    
          } else {
             
          }
          
  
  
  
     }
}



?>