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
}
