<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use App\Models\Project;
use App\Models\Tasks;
use App\Models\Work;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{




 
  public function show($parameter){
    
    $project = Project::find($parameter);
    $tasks = Tasks::where('project_id' ,$parameter)->join('developers', 'tasks.developer_id', '=' , 'developers.id')->join('projects', 'tasks.project_id', '=' , 'projects.id')->select('developers.name_developer', 'projects.name_project','tasks.name', 'tasks.description', 'tasks.task_status', 'tasks.id', 'tasks.deadline')->get();
    // print_r($tasks);
    // die;
    $developer = Developers::all();
    $p_date = date_format(new DateTime($project['deadline']), 'd M Y');
    $now = new DateTime();
    if($p_date < $now) {
    $p_late = true;
}






  skip:
    return view('tasks.tasks',[
      'project' => $project,
      'title' => 'Tasks',
      'tasks' => $tasks,
      'developer' => $developer,
      'string_date' => $p_date,
      'bool_deadline_project'=> $p_late
    ]);

  }
  public function store(Request $request)
  {
    // dd($request);
    $tasks = new Tasks();
    $tasks->developer_id = $request->developer_id;
    $tasks->project_id = $request->project_id;
    $tasks->name = $request->name;
    $tasks->description = $request->description;
    $tasks->task_status = $request->task_status;
    $tasks->deadline = $request->deadline;
    if ($tasks->save()) {
      return redirect('/tasks/from_project/'.$request->project_id)->with('success', 'Task Created Successfully!');
    }
    
  

  }


  public function getTaskByid($id)
    {
        $projects = Tasks::find($id);
        echo json_encode($projects);
    }
  public function update(Request $request, $id)
  {
   $tasks = Tasks::find($id);
   if ($tasks->update($request->all())) {
    return redirect('/tasks/from_project/'.$request->project_id)->with('toast_success', 'Task Update  Successfully!');
   }
  }
  public function deleted($id){
    $tasks = Tasks::find($id);
    if ($tasks->delete()) {
      return redirect('/tasks/from_project/'.$tasks->project_id)->with('toast_success', 'Task Update  Successfully!');
    }
  }
}
