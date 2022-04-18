<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('category')->get();
        //  return dd($projects);
        $clients = Project::with('Client')->get();
        // return dd($clients);

        return view('project.project',[
            "title" => "project",
            'projects' => $projects,
            'clients' => $clients
        ]);
    }
}
