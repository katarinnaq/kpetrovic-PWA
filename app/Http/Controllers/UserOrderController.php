<?php

namespace App\Http\Controllers;

use App\Models\AdminOrder;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
       public function orders(){
         $orders = Order::where('user_id', Auth::id())->get();
        $orders = Order::with('adminOrder')->where('user_id', Auth::id())->get();

        return view('user.orders', compact('orders'));
       }


// CRUD II


    //    OBRISI
       public function destroy($id)
        {
            $order = Order::where('user_id', Auth::id())->findOrFail($id);
            $order->delete();

            return redirect()->route('user.orders');
        }

//       IZMENI
          public function edit($id)
          {
              $order = Order::findOrFail($id);
              $products = Product::all();

              return view('user.edit', compact('order', 'products'));
          }
          

          public function update(Request $request, $id)
            {
                $request->validate([
                    'product_id' => 'required|exists:products,id',
                ]);

                $order = Order::findOrFail($id);

                $product = Product::find($request->product_id);

                $order->update([
                    'naziv' => $product->naziv,
                ]);

                return redirect()->route('user.orders');
            }

            
//      DODAJ
            public function create()
            {
                $products = Product::all();
                return view('user.create', compact('products'));
            }

            
            public function store(Request $request)
            {
                $request->validate([
                    'product_id' => 'required|exists:products,id',
                ]);

                $product = Product::find($request->product_id);

                $order = Order::create([
                    'user_id' => Auth::id(),
                    'naziv' => $product->naziv,
                ]);


    // admin orders

    AdminOrder::create([
        'order_id' => $order->id,
        'status' => 'Na cekanju',  
    ]);

    return redirect()->route('user.orders');
}
            
}
