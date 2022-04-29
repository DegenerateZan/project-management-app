<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Project;

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

    public function checkproject($id){
        $resultget = Project::where('category_id', $id)->count();
        echo $resultget;
    }
    public function store(Request $request)
    {
        $request->validate([
          "name" => "required"
        ]);
        $category = new Category();
        $category->name = $request->name;
        if($category->save()) {
            return redirect('/category')->with('success', 'Category Created Successfully!');   
        }
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($category->update($request->all())) {
            return redirect('/category')->with('toast_success', 'Category Created Successfully!');
        }
    }
    public function delete($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect('/category')->with('toast_success', 'Category Created Successfully!');
        }
    }
}
