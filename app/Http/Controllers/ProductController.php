<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Database\Seeders\ProductSeeder;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $proizvodi = Product::where('istaknuto', 1)->get();
        return view('public.index', compact('proizvodi'));
    }

    public function kontakt(){
        return view('public.kontakt');
    }

}
