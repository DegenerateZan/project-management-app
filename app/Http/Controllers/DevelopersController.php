<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use Illuminate\Http\Request;

class DevelopersController extends Controller
{
   public function index()
   {

    $developer = Developers::all();

    return view('developer.developer',[
       
        "title" => "Developers",
        "developers" => $developer

    ]);
   }
   public function store(Request $request)
   {
    //    dd($request);

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
            echo "<script>
                 alert('add developer success');
                 document.location.href = '/developers';
                </script>";
        } else {
            echo "<script>
            alert('add developer failed');
            document.location.href = '/developers';
           </script>";
        }
        



   }
}
