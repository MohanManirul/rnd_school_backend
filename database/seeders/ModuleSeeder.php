<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $date = Carbon::now();

        DB::statement('DELETE FROM modules');

        DB::table('modules')->insert([
            [
                'id' => 1,
                'name' => 'User Management',
                'key' => 'user_module',
                'icon' => 'fas fa-users',
                'sequence' => 1,
                'route' => null,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 2,
                'name' => 'Job Management',
                'key' => 'job_module',
                'icon' => 'fas fa-users',
                'sequence' => 2,
                'route' => null,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 3,
                'name' => 'Company Management',
                'key' => 'company_module',
                'icon' => 'fas fa-users',
                'sequence' => 3,
                'route' => null,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 4,
                'name' => 'Applicant Management',
                'key' => 'applicant_module',
                'icon' => 'fas fa-users',
                'sequence' => 4,
                'route' => null,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 5,
                'name' => 'Test Module',
                'key' => 'test_module',
                'icon' => 'fas fa-users',
                'sequence' => 5,
                'route' => null,
                'created_at' => $date,
                'updated_at' => $date,
            ]
        ]);
    }
}
