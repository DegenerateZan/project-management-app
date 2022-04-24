<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tasks;
use DateTime;
use Illuminate\Http\Request;

class TasksController extends Controller
{




 
  public function show($parameter){
    $project = Project::find($parameter);
    $tasks = Tasks::all()->where('project_id', $parameter);
    $p_date = date_format(new DateTime($project['deadline']), 'd M Y');


    $now = new DateTime();

    if($p_date < $now) {
    $p_late = true;
}

    return view('tasks.tasks',[
      'project' => $project,
      'tasks' => $tasks,
      'string_date' => $p_date,
      'bool_deadline_project'=> $p_late
    ]);

  }




  public function false(){
    echo "
      <script>
          alert('Warning! you need to choose which project first to show Tasks!');
          window.location.href = '/projects'
      </script>

    ";
    die;
  }
}
