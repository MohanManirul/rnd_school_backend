<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('DELETE FROM categories');

        DB::table('categories')->insert([
            [
                'categoryName' => 'Electronics',
                'categoryImg'  => 'https://images.unsplash.com/photo-1518770660439-4636190af475',
            ],
            [
                'categoryName' => 'Fashion',
                'categoryImg'  => 'https://images.unsplash.com/photo-1521335629791-ce4aec67ddaf',
            ],
            [
                'categoryName' => 'Home & Living',
                'categoryImg'  => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511',
            ],
            [
                'categoryName' => 'Sports & Fitness',
                'categoryImg'  => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438',
            ],
            [
                'categoryName' => 'Beauty & Care',
                'categoryImg'  => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9',
            ],
            [
                'categoryName' => 'Automotive',
                'categoryImg'  => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70',
            ],
            [
                'categoryName' => 'Books & Education',
                'categoryImg'  => 'https://images.unsplash.com/photo-1512820790803-83ca734da794',
            ],
            [
                'categoryName' => 'Toys & Games',
                'categoryImg'  => 'https://images.unsplash.com/photo-1607082349566-187342175e2f',
            ],
            [
                'categoryName' => 'Groceries',
                'categoryImg'  => 'https://images.unsplash.com/photo-1542838132-92c53300491e',
            ],
            [
                'categoryName' => 'Health & Medical',
                'categoryImg'  => 'https://images.unsplash.com/photo-1580281657521-6c6f6bcd1b12',
            ],
        ]);
    }
}
