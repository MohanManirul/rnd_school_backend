<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([

            SuperAdminSeeder::class,
            // ModuleSeeder::class,
            // SubModuleSeeder::class,
            // PermissionSeeder::class,
            // RoleSeeder::class,
            // // AboutSeeder::class,
            // UserSeeder::class,
            // InstituteSeeder::class,
            // SchoolClassSeeder::class // run this seeder after creating medium table data , where primary id must be 1,2,3
            // // AppSettingSeeder::class
            // // DaySeeder::class,
            // // SslcommerzAccountSeeder::class


       ]);
    }
}
