<?php

namespace Database\Seeders;


use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role_id', 3)->first();

         if ($user) {
            Comment::create([
                'user_id' => $user->id,
                'tekst' => 'Sve pohvale za Eternu.'
            ]);

            Comment::create([
                'user_id' => $user->id,
                'tekst' => 'Eterna Sok Od Jabuke je sjajan proizvod! .'
            ]);

             Comment::create([
                'user_id' => $user->id,
                'tekst' => 'Eterna Sok Od Breskve je odlican proizvod! .'
            ]);

             Comment::create([
                'user_id' => $user->id,
                'tekst' => 'Sve preporuke za gaziranu vodu.'
            ]);

             Comment::create([
                'user_id' => $user->id,
                'tekst' => 'Ne dopada mi se sok breskve .'
            ]);
        }
    }

    
}
