<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            "name"=>"admin",
            "email"=>"admin@pwa.rs",
            "password"=> Hash::make("admin"),
            "role_id"=> 1
        ]);

        User::create([

            "name"=>"editor",
            "email"=>"editor@pwa.rs",
            "password"=> Hash::make("editor"),
            "role_id"=> 2
        ]);

        User::create([

            "name"=>"user",
            "email"=>"user@pwa.rs",
            "password"=> Hash::make("user"),
            "role_id"=> 3
        ]);

        
        User::create([

            "name"=>"katarina",
            "email"=>"katarina@pwa.rs",
            "password"=> Hash::make("katarina"),
            "role_id"=> 3
        ]);



        
        User::create([

            "name"=>"ana",
            "email"=>"ana@pwa.rs",
            "password"=> Hash::make("ana"),
            "role_id"=> 3
        ]);
    }
}
