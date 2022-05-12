<?php 
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Client;
use App\Models\Category;
use App\Models\Payment;
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
                // if (!isset($i[$id_p][$loop])){
                //     break;
                // }
                
                $payments_array[$id_p][$loop] = $payment->amount;
                // var_dump($payments_array);
                $loop++;
            }
        //    die;
            // foreach($projects as $project){
            //     var_dump($project);
            // }
            // die;
             
        //     foreach($projects as $project){
        //         // var_dump($project);
                
        //             foreach($payments as $payment){
        //                 $id_p = $payment->project_id;
        
        //                 $payments_array[$id_p] = $payment->amount;
        //                 echo $project->name . ' ' . $payments_array[$id_p] . ' ' . $id_p . '<br>' ;
                        
        //             }
 
        // }
        //     die;
        skip:
        return view('Project.Project',[
            'title' => 'project',
            'projects' => $projects,
            // 'payments_array' => '',
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
           $projects->name_project = $request->name;
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