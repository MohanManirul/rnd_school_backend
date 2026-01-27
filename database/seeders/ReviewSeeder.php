<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('DELETE FROM product_reviews');
        $reviews = [];
        $customerId = 1;

        for ($productId = 1; $productId <= 100; $productId++) {

            for ($i = 1; $i <= 15; $i++) {

                $reviews[] = [
                    'description' => 'This is a review for product ' . $productId,
                    'rating' => rand(1, 5), // rating 1–5
                    'customer_id' => $customerId,
                    'product_id' => $productId,
                ];

                // customer_id 1–10 rotate
                $customerId++;
                if ($customerId > 10) {
                    $customerId = 1;
                }
            }
        }

        DB::table('product_reviews')->insert($reviews);
    }
}
