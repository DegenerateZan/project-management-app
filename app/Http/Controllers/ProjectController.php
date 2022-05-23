<?php 
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Client;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Platform;
use App\Models\ProjectPlatfrom;
use App\Models\Tasks;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller{

    public function index()
    {
        $projects = Project::with('category')->with('client')->with('payments')->get();
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
        return view('Project.Project',[
            'title' => 'Projects',
            'projects' => $projects,
            'payments_array' => $payments_array,
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
        $payments = Payment::where('project_id', $id)->count();
        if ($payments > 0) {
            return redirect('/projects')->with('toast_error', 'This project cannot be deleted because it has transactions!'); 
            die;  
        }
        $task = Tasks::where('project_id', $id);
        $task->delete();
        $platfroms = ProjectPlatfrom::where('project_id', $id);
        $platfroms->delete();
        $projects = Project::find($id);
        if($projects->delete()){
            return redirect('/projects')->with('toast_success', 'Projects Deleted Successfully!');  
        }
    }

    public function store(Request $request)
    {
        // dd($request);

           $request->validate([
              'client_id' => 'required',
              'category_id' => 'required',
              'name_project' => 'required',
              'deadline' => 'required',
              'manufacture_date' => 'required',
              'status' => 'required',
              'price' => 'required'
           ]); 
  
  
           $projects = new Project();
  
           $projects->client_id = $request->client_id;
           $projects->status_payments = 0;
           $projects->category_id = $request->category_id;
           $projects->name_project = $request->name_project;
           $projects->status = $request->status;
           $projects->deadline = $request->deadline;
           $projects->price = $request->price;
           $projects->manufacture_date = $request->manufacture_date;

  
         
          if ($projects->save()) {
           return redirect('/projects')->with('success', 'Projects Created Successfully!');    
          } else {
             
          }
          
  
  
  
     }
     public function getProjectsByidClients($id)
     {
         $projects = Project::where('client_id', $id)->count();
         echo json_encode($projects);
     }
     public function update(Request $request, $id)
     {
        $projects = Project::find($id);
        if ($projects->update($request->all())) {
            return redirect('/projects')->with('toast_success', 'Projects Update Successfully!'); 
        }
     }
     public function getProjectByidcategory($id){

         $projects = Project::where('category_id', $id)->count();
         echo json_encode($projects);


     }
         
     
}



?>