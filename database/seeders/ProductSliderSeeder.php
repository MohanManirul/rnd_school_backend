<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('DELETE FROM product_sliders');

        DB::table('product_sliders')->insert([
            [
                'title' => 'Summer Collection',
                'short_des' => 'New summer fashion is here',
                'price' => '$99',
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475',
                'product_id' => 1,
            ],
            [
                'title' => 'Winter Jacket',
                'short_des' => 'Stay warm and stylish',
                'price' => '$149',
                'image' => 'https://images.unsplash.com/photo-1521335629791-ce4aec67ddaf',
                'product_id' => 2,
            ],
            [
                'title' => 'Casual Shoes',
                'short_des' => 'Comfortable everyday wear',
                'price' => '$79',
                'image' => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511',
                'product_id' => 3,
            ],
            [
                'title' => 'Smart Watch',
                'short_des' => 'Track your daily activity',
                'price' => '$199',
                'image' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438',
                'product_id' => 4,
            ],
            [
                'title' => 'Luxury Sunglasses',
                'short_des' => 'Premium quality eyewear',
                'price' => '$59',
                'image' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9',
                'product_id' => 5,
            ],
        ]);
    }
}
