<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use PDO;

class ClientsController extends Controller
{
 public function index()
 {
    return view('Client.Client',[
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
        return redirect('/clients')->with('success', 'Client Created Successfully!');
        
     }else{

         return redirect('/clients')->with('toast_erro', 'Client Failed Created!');
     }
     

      
      
    }
    public function delete($id)
    {
      
        
        $clients = Client::find($id);
        // $eror = PDO::ATTR_ERRMODE;
        if($clients->delete()){
            return redirect('/clients')->with('toast_success', 'Client delete Successfully!');
        }else{
            return redirect('/clients')->with('toast_erro', 'Client Failed Delete!');
        }
        
    
        
        

    }

    public function update(){
        dd($_POST);
    }

    public function getclient($id){

        //$a = var_dump($request);
        
        $resultget = Client::find($id);
        echo json_encode($resultget);
       
        
    }

}
