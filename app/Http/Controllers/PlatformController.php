<?php

namespace App\Http\Controllers;

use App\Models\ProjectPlatfrom;
use App\Models\Platform;
use App\Models\Project;
use Illuminate\Http\Request;

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

    //$a = var_dump($request);
    
    $resultget = Platform::find($id);
    echo json_encode($resultget);
   
    
}
    public function checkproject($id){
        $resultget = ProjectPlatfrom::where('paltform_id', $id)->count();
        echo $resultget;
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
            return redirect('/platform')->with('success', 'Platform Deleted Successfully!');
         }
     } 
     public function getPlatformByid($id){
         $platform = Platform::find($id);
         echo json_encode($platform);
     }
}
