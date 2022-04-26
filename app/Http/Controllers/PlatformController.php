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
           "categories" => Platform::all()
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

}
