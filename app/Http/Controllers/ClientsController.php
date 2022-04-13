<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
 public function index()
 {
    return view('clients.clients',[
        "title" => "clients",
        "data" => Client::all()
    ]);
 }  
}
