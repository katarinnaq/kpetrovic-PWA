<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new  Category();
        $category->naziv="Mineralna voda";
        $category->save();

        $category = new  Category();
        $category->naziv="Gazirana voda";
        $category->save();

        $category = new  Category();
        $category->naziv="Prirodna izvorska voda";
        $category->save();

        $category = new  Category();
        $category->naziv="Aromatizovana voda";
        $category->save();

        $category = new  Category();
        $category->naziv="Sokovi";
        $category->save();

    }
}
