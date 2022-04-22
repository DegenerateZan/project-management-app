<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tasks;

use Illuminate\Http\Request;

class TasksController extends Controller
{
  public function index()
  {
    return view('tasks.tasks',[
        "title" => "Tasks"
        // "project" => Project::find($id),
        // "tasks" => Tasks::all()->where('project_id', $id)

    ]);
  }

  public function show($id){
    return view('Tasks.Tasks', [
      "title" => "Tasks",
         "project" => Project::find($id),
        "tasks" => Tasks::all()->where('project_id', $id)

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
