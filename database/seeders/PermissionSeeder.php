<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM permissions');

        DB::table('permissions')->insert([
            // module 1 [User Module] Permission start
            [
                'id' => 1,
                'key' => 'user_module',
                'display_name' => 'User Management',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 2,
                'key' => 'roles',
                'display_name' => 'Roles',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 3,
                'key' => 'add_role',
                'display_name' => '-- Add Role',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 4,
                'key' => 'edit_role',
                'display_name' => '-- Edit Role',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 5,
                'key' => 'all_user',
                'display_name' => 'All Users',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 6,
                'key' => 'add_user',
                'display_name' => '-- Add User',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 7,
                'key' => 'edit_user',
                'display_name' => '-- Edit User',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 8,
                'key' => 'reset_password',
                'display_name' => '-- Reset Password',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 9,
                'key' => 'job_module',
                'display_name' => 'Job Management',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 10,
                'key' => 'jobs',
                'display_name' => '--All Jobs',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 11,
                'key' => 'add_job',
                'display_name' => '-- Add Job',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 12,
                'key' => 'job_categories',
                'display_name' => 'All Job Categories',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 13,
                'key' => 'add_job_category',
                'display_name' => '-- Add Job Category',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 14,
                'key' => 'edit_job_category',
                'display_name' => '-- Edit Job Category',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ],            
            [
                'id' => 15,
                'key' => 'company_module',
                'display_name' => 'Company Management',
                'module_id' => 3,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 16,
                'key' => 'company',
                'display_name' => '--All Company',
                'module_id' => 3,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 17,
                'key' => 'add_company',
                'display_name' => '-- Add Company',
                'module_id' => 3,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 18,
                'key' => 'applicant_module',
                'display_name' => 'Applicant Management',
                'module_id' => 4,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 19,
                'key' => 'applicant',
                'display_name' => '--All Applicant',
                'module_id' => 4,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 20,
                'key' => 'add_applicant',
                'display_name' => '-- Add Applicant',
                'module_id' => 4,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 21,
                'key' => 'test_module',
                'display_name' => '-- Test Module',
                'module_id' => 5,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 22,
                'key' => 'all_test',
                'display_name' => 'All Test',
                'module_id' => 5,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            // module 1 [User Module] Permission end

        ]);
    }
}
