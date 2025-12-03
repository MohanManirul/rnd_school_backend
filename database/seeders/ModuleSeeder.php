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
                'menu_value' => 'Dashboard',
                'has_sub_route' => true,
                'show_sub_route' => true,
                'route' => "dashboard",
                'sub_routes' => json_encode([]),
                'active_link' => "dashboard",
                'key' => 'dashboard_module',
                'icon' => 'fas fa-users',
                'sequence' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 2,
                'menu_value' => 'Application',
                'has_sub_route' => true,
                'show_sub_route' => true,
                'route' => "application",
                'sub_routes' => json_encode([]),
                'active_link' => "application",
                'key' => 'application_module',
                'icon' => 'fas fa-users',
                'sequence' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ], 
        ]);
    }
}
