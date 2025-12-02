<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $date = Carbon::now();

        DB::statement('DELETE FROM sub_modules');

        DB::table('sub_modules')->insert([

             // module 1 [User Module] start
             [
                'id' => 1,
                'name' => 'Role',
                'key' => 'roles',
                'sequence' => 1,
                'route' => 'role.list',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 2,
                'name' => 'All User',
                'key' => 'all_user',
                'sequence' => 2,
                'route' => 'user.list',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 3,
                'name' => '-- Job Categories',
                'key' => 'job_categories',
                'sequence' => 3,
                'route' => 'job.category.list',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 4,
                'name' => '-- All Job',
                'key' => 'all_job',
                'sequence' => 4,
                'route' => 'job.list',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 5,
                'name' => '-- All Company',
                'key' => 'all_company',
                'sequence' => 1,
                'route' => 'company.list',
                'module_id' => 3,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 6,
                'name' => '-- All Applicant',
                'key' => 'all_applicant',
                'sequence' => 5,
                'route' => 'applicant.list',
                'module_id' => 4,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 7,
                'name' => '-- All Test',
                'key' => 'all_test',
                'sequence' => 5,
                'route' => 'all.test',
                'module_id' => 5,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            // module 1 [User Module] end
            
        ]);
    }
}
