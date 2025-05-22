<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role_id', 3)->first(); 

        if ($user) {
            Order::create([
                'user_id' => $user->id,
                'naziv' => 'Eterna 0.25L',
               
                
            ]);

            Order::create([
                'user_id' => $user->id,
                'naziv' => 'Eterna 0.75L',
               
                
            ]);

            Order::create([
                'user_id' => $user->id,
                'naziv' => 'Eterna 1.5L',
               
               
            ]);
             Order::create([
                'user_id' => $user->id,
                'naziv' => 'Eterna 2L',
                
               
            ]);

             Order::create([
                'user_id' => $user->id,
                'naziv' => 'Eterna 5L',
               
               
            ]);
        }
    }
}
