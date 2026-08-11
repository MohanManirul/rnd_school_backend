<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SslcommerzAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM sslcommerz_accounts');

        DB::table('sslcommerz_accounts')->insert([
            [ 
                'id' => 1,
                'store_id' => 'bides6a4a790630186',
                'store_passwd' => 'bides6a4a790630186@ssl',
                'currency' => 'BDT',
                'success_url' => 'http://127.0.0.1:3000/PaymentSuccess',
                'fail_url' => 'http://127.0.0.1:3000/PaymentFail',
                'cancel_url' => 'http://127.0.0.1:3000/PaymentCancel',
                'ipn_url' => 'http://127.0.0.1:3000',
                'init_url' => 'https://sandbox.sslcommerz.com/gwprocess/v4/api.php',
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ]);
    }
}
