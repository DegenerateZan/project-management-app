<?php

namespace App\Http\Controllers;

use App\Models\ProjectPlatfrom;
use App\Models\Platform;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlatformController extends Controller
{
   public function index()
   {
       return view('Platform.Platform',[
           "title" => "Platform",
           "platforms" => Platform::all()
       ]);
   }

   public function getPlatform($id){
    
    $resultget = Platform::find($id);
    echo json_encode($resultget);
   
    
}
    public function checkproject($id){
        $resultget = ProjectPlatfrom::where('paltform_id', $id)->count();
        echo $resultget;
    }
    public function getDataProjectPlatformByidPlatforms($id)
    {
        $platform = ProjectPlatfrom::where('paltform_id', $id)->count();
        echo json_encode($platform);
    }

    public function store(Request $request){
       $platform = new Platform();
       $platform->name = $request->name;
       if ($platform->save()) {
        return redirect('/platform')->with('success', 'Platform Created Successfully!');
       }
    }
     public function delete($id){
         $platform =  Platform::find($id);
         if ($platform->delete()) {
            return redirect('/platform')->with('toast_success', 'Platform Deleted Successfully!');
         }
     } 
     public function getPlatformByid($id){
         $platform = Platform::find($id);
         echo json_encode($platform);
     }
    public function ProjectPlatform()
    {
        
        return view('platform.platform-project',[
            'title' => 'Project Platform',
            'platforms' =>  DB::table('project_platforms')->join('projects', 'project_platforms.project_id' ,'=' , 'projects.id')->join('platforms' ,'project_platforms.paltform_id', '=' , 'platforms.id')->select( 'projects.name_project', 'platforms.name', 'project_platforms.id')->get(),
            'project' => Project::all(),
            'data' => Platform::all()
        ]);
    }
    public function ProjectPlatformStore(Request $request)
    {
        $ProjectPlatform = new ProjectPlatfrom();
        $ProjectPlatform->project_id = $request->project_id;
        $ProjectPlatform->paltform_id = $request->paltform_id;
        if ($ProjectPlatform->save()) {
             return redirect('/ProjectPlatform')->with('success', 'Project Platform Created Successfully!');
        }
    }
    public function getDataProjectPlatform($id)
    {
        $ProjectPlatform = ProjectPlatfrom::find($id);
        echo json_encode($ProjectPlatform);
    }
    public function ProjectPlatformUpdate( Request $request, $id)
    {
        // dd($request);
        $ProjectPlatform = ProjectPlatfrom::find($id);
        if ($ProjectPlatform->update($request->all())) {
            return redirect('/ProjectPlatform')->with('toast_success', 'Project Platform Update Successfully!');
        }
    }
    public function ProjectPlatformDeleted($id)
    {
        $ProjectPlatform = ProjectPlatfrom::find($id);
        if ($ProjectPlatform->delete()) {
            return redirect('/ProjectPlatform')->with('toast_success', 'Project Platform Deleted Successfully!');
        }
    }
}
