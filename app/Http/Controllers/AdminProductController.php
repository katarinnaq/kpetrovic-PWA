<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function list(){
        return view('admin-list',[
            "products"=>Product::all(),
            "categories"=>Category::all()
        ]);
    }
    


// CRUD I

    // DODAJ

    public function add(){
        return view('admin-add',[
            "categories"=>Category::all()
        ]);
    }

    public function create(Request $request){
        $request->validate([
            'naziv'=>'required|string|max:256',
            'cena'=>'required|numeric|min:0',
            'opis'=>'required|string',
            'istaknuto' => 'required|in:0,1',

            // 'kategorija'=>'required|min:0',

        ]);

        $product= new Product();
        $product->naziv= $request->naziv;
        $product->opis= $request->opis;
        $product->category_id= $request->category_id;
        $product->cena= $request->cena;
        $product->istaknuto = $request->istaknuto;
        $product->slika= $request->slika;


        $product->save();
        return redirect()->route('admin-list');
    }


    // IZMENI

    public function edit($id){
        $product = Product::findOrFail($id);
        $categories=Category::all();

        return view("admin-edit",[
            "product"=> $product,
            "categories"=>$categories

        ]);


    }

    public function update(Request $request,$id){

        $product = Product::findOrFail($id);

        
        $request->validate([
            'naziv' => 'required|string|max:256',
            'cena' => 'required|numeric|min:0',
            'opis' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'istaknuto' => 'required|boolean',
        ]);
        
        $product->naziv=$request->naziv;
        $product->opis=$request->opis;
        $product->cena=$request->cena;
        $product->category_id=$request->category_id;
        $product->istaknuto=$request->istaknuto;
        $product->slika=$request->slika;

       if ($request->hasFile('slika')) {
        $image = $request->file('slika');
        $imageName =$image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $product->slika = $imageName;
        } 
        else {
        $product->slika = $request->stara_slika;
        }
       
        $product->save();

        return redirect()->route('admin-list');
        

    }

    // OBRISI
    
    public function destroy($id){
        $product=Product::find($id);
        $product->delete();
        return redirect()->route("admin-list");

    }

   
    
}
