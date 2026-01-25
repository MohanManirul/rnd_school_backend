<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('DELETE FROM brands');
        DB::table('brands')->insert([
            [
                'brandName' => 'Apple',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg',
            ],
            [
                'brandName' => 'Samsung',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg',
            ],
            [
                'brandName' => 'Nike',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg',
            ],
            [
                'brandName' => 'Adidas',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/2/20/Adidas_Logo.svg',
            ],
            [
                'brandName' => 'Microsoft',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg',
            ],
            [
                'brandName' => 'Google',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg',
            ],
            [
                'brandName' => 'Amazon',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg',
            ],
            [
                'brandName' => 'Sony',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/2/29/Sony_Logo.svg',
            ],
            [
                'brandName' => 'Coca-Cola',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/c/ce/Coca-Cola_logo.svg',
            ],
            [
                'brandName' => 'Toyota',
                'brandImg'  => 'https://upload.wikimedia.org/wikipedia/commons/9/9d/Toyota_logo.svg',
            ],
        ]);
    }
}
