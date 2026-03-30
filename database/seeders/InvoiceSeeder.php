<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        
        DB::statement('DELETE FROM invoices');

        for ($userId = 1; $userId <= 10; $userId++) {

            // প্রতি user এর জন্য multiple invoice (3-6)
            $invoiceCount = rand(3, 6);

            for ($i = 0; $i < $invoiceCount; $i++) {

                $total = rand(1000, 5000);
                $discount = rand(100, 500);
                $vat = ($total - $discount) * 0.15;
                $payable = $total - $discount + $vat;

                $data[] = [
                    'total' => (string) $total,
                    'discount' => (string) $discount,
                    'vat' => (string) round($vat, 2),
                    'payable' => (string) round($payable, 2),
                    'cus_details' => 'Customer Name: User ' . $userId . ', Phone: 01XXXXXXXXX',
                    'ship_details' => 'Shipping Address: Dhaka, Bangladesh (User ' . $userId . ')',
                    'tran_id' => strtoupper(Str::random(12)),
                    'val_id' => '0',
                    'delivery_status' => ['Pending', 'Processing', 'Completed'][rand(0, 2)],
                    'payment_status' => ['Paid', 'Unpaid', 'Failed'][rand(0, 2)],
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('invoices')->insert($data);
    }
}
