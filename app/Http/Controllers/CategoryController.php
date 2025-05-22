<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

      public function add(){
        return view('category-add',[
            "categories"=>Category::all()
        ]);
    }

    public function create(Request $request){
        $request->validate([
            'naziv'=>'required|string|max:256',


        ]);

        $categories= new Category();
        $categories->naziv= $request->naziv;
       

        $categories->save();
        return redirect()->route('admin-list');
    }

    
    // OBRISI
     public function list(){
        return view('admin-list',[
    
            "categories"=>Category::all()
        ]);
    }
    public function destroy($id){
        $categories=Category::find($id);
        $categories->delete();
        return redirect()->route("admin-list");

    }

    
    // IZMENI

    public function edit($id){
        $categories = Category::findOrFail($id);
        // $categories=Category::all();

        return view("category-edit",[
           
            "categories"=>$categories

        ]);


    }

    public function update(Request $request,$id){

        $categories = Category::findOrFail($id);

      
        
        $categories->naziv=$request->naziv;
     
    
        $categories->save();

        return redirect()->route('admin-list');
        

    }
}
