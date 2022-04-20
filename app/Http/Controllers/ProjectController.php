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
        return view('project.project',[
            'title' => 'project',
            'projects' => Project::with('category')->with('client')->get(),
            'clients' => Client::all(),
            'categories' => Category::all(),
            'platforms' => Platform::all()
        ]);
    }
    
}
