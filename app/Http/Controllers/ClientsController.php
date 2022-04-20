<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
 public function index()
 {
    return view('client.client',[
        "title" => "Clients",
        "data" => Client::all()
    ]);
 }  

 public function store(Request $request)
 {
    //  dd($request);

       $request->validate([
          'name_client' => 'required',
          'number_account' => 'required',
          'addres' => 'required',
          'number_phone' => 'required',
          'email' => 'required'
       ]); 


       $client = new Client();

       $client->name_client = $request->name_client;
       $client->addres = $request->addres;
       $client->email = $request->email;
       $client->number_phone = $request->number_phone;
       $client->number_account = $request->number_account;
       $client->company_name = $request->company_name;

      if ($client->save()) {
          echo "<script>
               alert('add client success');
               document.location.href = '/clients';
              </script>";
      } else {
          echo "<script>
          alert('add client failed');
          document.location.href = '/clients';
         </script>";
      }
      
    }
    public function delete($id)
    {
        dd($id);
        $clients = Client::find($id);
        $clients->delete();
    
        
        

    }

}
