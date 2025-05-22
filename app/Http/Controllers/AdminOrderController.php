<?php

namespace App\Http\Controllers;

use App\Models\AdminOrder;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
{
    $adminOrders = AdminOrder::with('order')->get();
    return view('admin-orders', compact('adminOrders'));
}

public function updateStatus(Request $request, $id)
{
    $order = AdminOrder::findOrFail($id);
    $order->status = $request->input('status');
    $order->save();

    return redirect()->route("admin-orders");
}
}
