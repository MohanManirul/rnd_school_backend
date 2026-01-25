<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('DELETE FROM product_details');
        $data = [];

        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'img1' => 'https://picsum.photos/seed/' . $i . 'a/600/600',
                'img2' => 'https://picsum.photos/seed/' . $i . 'b/600/600',
                'img3' => 'https://picsum.photos/seed/' . $i . 'c/600/600',
                'img4' => 'https://picsum.photos/seed/' . $i . 'd/600/600',

                'des' => 'This is a long description for product ID ' . $i . '. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.',

                'color' => 'Red,Blue,Black',
                'size'  => 'S,M,L,XL',

                'product_id' => $i, // 1 to 100
            ];
        }

        DB::table('product_details')->insert($data);
    }
}
