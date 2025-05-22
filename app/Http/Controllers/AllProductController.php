<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AllProductController extends Controller
{
        public function list(){
        $proizvodi = Product::all(); 
        return view('public.list', compact('proizvodi')); 
    }

        public function single($id)
    {
        $proizvod = Product::findOrFail($id);
        return view('public.single', compact('proizvod'));
    }
}
