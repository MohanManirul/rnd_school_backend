<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('DELETE FROM customer_profiles');
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'cus_name' => 'Customer ' . $i,
                'cus_add' => 'House ' . $i . ', Road ' . $i . ', Area ' . $i,
                'cus_city' => 'Dhaka',
                'cus_state' => 'Dhaka',
                'cus_postcode' => '120' . $i,
                'cus_country' => 'Bangladesh',
                'cus_phone' => '017000000' . $i,
                'cus_fax' => '02-90000' . $i,

                'ship_name' => 'Customer ' . $i,
                'ship_add' => 'Shipping Address ' . $i,
                'ship_city' => 'Dhaka',
                'ship_state' => 'Dhaka',
                'ship_postcode' => '120' . $i,
                'ship_country' => 'Bangladesh',
                'ship_phone' => '018000000' . $i,

                'user_id' => $i,
            ];
        }

        DB::table('customer_profiles')->insert($data);
    }
}
