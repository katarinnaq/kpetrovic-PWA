<?php

namespace Database\Seeders;

use App\Models\AdminOrder;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $orders = Order::all();

    foreach ($orders as $order) {
        AdminOrder::create([
            'order_id' => $order->id,
            'status' => 'Na čekanju', 
        ]);
    }
    }
}
