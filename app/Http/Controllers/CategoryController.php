<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.category',[
            "title" => "category",
            "data" => Category::all()
        ]);
    }

    public function getCategory($id){

        //$a = var_dump($request);
        
        $resultget = Category::find($id);
        echo json_encode($resultget);
       
        
    }
}
