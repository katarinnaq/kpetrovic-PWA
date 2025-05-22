<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product=new Product();
        $product->naziv="Eterna 0.25L";
        $product->opis="Mineralna voda u PET ambalazi.";
        $product->cena="65.00";
        $product->category_id="1";
        $product->istaknuto="1";
        $product->slika="eterna1.jpg";

        $product->save();

        $product=new Product();
        $product->naziv="Eterna 2L";
        $product->opis="Gazirana voda u PET ambalazi.";
        $product->cena="95.00";
        $product->category_id="2";
        $product->istaknuto="1";
        $product->slika="eterna2.jpg";

        $product->save();


        $product=new Product();
        $product->naziv="Eterna 0.75L";
        $product->opis="Prirodna izvorska Eterna voda u PET ambalazi.";
        $product->cena="55.00";
        $product->category_id="3";
        $product->istaknuto="1";
        $product->slika="eterna3.jpg";

        $product->save();


        $product=new Product();
        $product->naziv="Eterna - Ukus Breskve 0.75";
        $product->opis="Aromatizovana voda u PET ambalazi sa ukusom breskve.";
        $product->cena="80.00";
        $product->category_id="4";
        $product->istaknuto="0";
        $product->slika="eterna4.jpg";

        $product->save();


        $product=new Product();
        $product->naziv="Eterna - Sok Od Jabuke 2L";
        $product->opis="Eterna sok od jabuke u tetrapaku 2L.";
        $product->cena="120.00";
        $product->category_id="5";
        $product->istaknuto="0";
        $product->slika="eterna5.jpg";

        $product->save();

        $product=new Product();
        $product->naziv="Eterna 1L";
        $product->opis="Mineralna voda u PET ambalazi.";
        $product->cena="90.00";
        $product->category_id="0";
        $product->istaknuto="0";
        $product->slika="eterna1.jpg";

        $product->save();

        $product=new Product();
        $product->naziv="Eterna 0.75L";
        $product->opis="Gazirana voda u PET ambalazi.";
        $product->cena="50.00";
        $product->category_id="2";
        $product->istaknuto="0";
        $product->slika="eterna2.jpg";

        $product->save();


        $product=new Product();
        $product->naziv=("Eterna 0.25L");
        $product->opis="Prirodna izvorska Eterna voda u PET ambalazi.";
        $product->cena="35.00";
        $product->category_id="3";
        $product->istaknuto="0";
        $product->slika="eterna3.jpg";

        $product->save();


        $product=new Product();
        $product->naziv="Eterna - Ukus Jabuke 0.25";
        $product->opis="Aromatizovana voda u PET ambalazi sa ukusom breskve.";
        $product->cena="50.00";
        $product->category_id="4";
        $product->istaknuto="0";
        $product->slika="eterna7.jpg";

        $product->save();


        $product=new Product();
        $product->naziv="Eterna - Sok Od Višnje 2L";
        $product->opis="Eterna sok od jabuke u tetrapaku 2L.";
        $product->cena="120.00";
        $product->category_id="5";
        $product->istaknuto="0";
        $product->slika="eterna6.jpg";

        $product->save();



        

    }
}
