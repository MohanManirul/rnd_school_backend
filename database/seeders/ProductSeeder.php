<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('DELETE FROM products');

        $remarks = ['popular','new','top','special','trending','regular'];

        for ($i = 1; $i <= 100; $i++) {

            $price = rand(500, 5000);
            $hasDiscount = rand(0, 1);

            DB::table('products')->insert([
                'title'           => 'Product ' . $i,
                'short_des'       => 'This is a short description for product number ' . $i,
                'price'           => (string)$price,
                'discount'        => $hasDiscount,
                'discount_price'  => $hasDiscount ? (string)($price - rand(50, 300)) : '0',
                'image'           => 'https://picsum.photos/seed/product'.$i.'/400/400',
                'stock'           => rand(0, 1),
                'star'            => rand(30, 50) / 10, // 3.0 – 5.0
                'remark'          => $remarks[array_rand($remarks)],

                // assuming categories & brands already seeded
                'category_id'     => rand(1, 10),
                'brand_id'        => rand(1, 10),
            ]);
        }
    }
}
