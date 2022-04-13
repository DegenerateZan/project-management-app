<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project.projects',[
            "title" => "project",
            "data" => Project::all()
        ]);
    }
}
