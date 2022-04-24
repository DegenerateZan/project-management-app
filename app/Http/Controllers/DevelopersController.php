<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use Illuminate\Http\Request;
use PDO;

class DevelopersController extends Controller
{
   public function index()
   {

    $developer = Developers::all();

    return view('Developer.Developer',[
       
        "title" => "Developers",
        "developers" => $developer

    ]);
   }
   public function getDeveloper($id)
   {
      $results = Developers::find($id);
      echo json_encode($results);
   }
   public function store(Request $request)
   {
      //  dd($request);

         $request->validate([
            'name' => 'required',
            'account_number' => 'required',
            'address' => 'required',
            'telephone_number' => 'required',
            'email' => 'required'
         ]); 


         $developer = new Developers();

         $developer->name = $request->name;
         $developer->address = $request->address;
         $developer->account_number = $request->account_number;
         $developer->telephone_number = $request->telephone_number;
         $developer->email = $request->email;

       
        if ($developer->save()) {
         return redirect('/developers')->with('success', 'Developer Created Successfully!');    
        } else {
           
        }
        



   }

   public function delete($id)
   {
   
     $developer = Developers::find($id);
     if ($developer->delete()) {
        return redirect('/developers')->with('toast_success', 'Developer delete Successfully!');
     }
   }

   public function update(){
      
   }
}
