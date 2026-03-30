<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InvoiceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        DB::statement('DELETE FROM invoice_products');
        // invoice_id 1 থেকে 25
        for ($invoiceId = 1; $invoiceId <= 25; $invoiceId++) {

            // প্রতি invoice এ 2-6 টা product
            $itemCount = rand(2, 6);

            // random unique product id select
            $productIds = collect(range(1, 100))->shuffle()->take($itemCount);

            foreach ($productIds as $productId) {

                $qty = rand(1, 5);
                $price = rand(100, 1000);

                $data[] = [
                    'invoice_id' => $invoiceId,
                    'product_id' => $productId,
                    'user_id' => rand(1, 10), // random user (or চাইলে invoice অনুযায়ী assign করা যাবে)
                    'qty' => (string) $qty,
                    'sale_price' => (string) $price,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('invoice_products')->insert($data);
    }
}
