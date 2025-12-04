<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM menus');

        DB::table('menus')->insert([
            [
                'id'            => 1,
                'parent_id'     => null,
                'ordering'      => 1,
                'menu_name'     => "dashboard",
                'menu_desc'     => "Dashboard",
                'm_font'        => "nav-icon fas fa-tachometer-alt",
                'me_font'       => "right fas fa-angle-left",                
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 2,
                'parent_id'     => null,
                'ordering'      => 2,
                'menu_name'     => "users",
                'menu_desc'     => "User",
                'm_font'        => "nav-icon fas fa-users",
                'me_font'       => "right fas fa-angle-left",               
                'created_at'    => $date,
                'updated_at'    => $date,
            ], 
            [
                'id'            => 3,
                'parent_id'     => null,
                'ordering'      => 3,
                'menu_name'     => "settings",
                'menu_desc'     => "Settings",
                'm_font'        => "nav-icon fas fa-cogs",
                'me_font'       => "right fas fa-angle-left",               
                'created_at'    => $date,
                'updated_at'    => $date,
            ], 
            [
                'id'            => 4,
                'parent_id'     => null,
                'ordering'      => 4,
                'menu_name'     => "student_mng",
                'menu_desc'     => "Students",
                'm_font'        => "nav-icon fas fa-user-graduate",
                'me_font'       => "right fas fa-angle-left",               
                'created_at'    => $date,
                'updated_at'    => $date,
            ], 
            [
                'id'            => 5,
                'parent_id'     => 3,
                'ordering'      => 5,
                'menu_name'     => "session_mng",
                'menu_desc'     => "Sessions",
                'm_font'        => "far fa-circle nav-icon",
                'me_font'       => null,               
                'created_at'    => $date,
                'updated_at'    => $date,
            ], 
            [
                'id'            => 6,
                'parent_id'     => 3,
                'ordering'      => 2,
                'menu_name'     => "class_mng",
                'menu_desc'     => "Classes",
                'm_font'        => "far fa-circle nav-icon",
                'me_font'       => null,               
                'created_at'    => $date,
                'updated_at'    => $date,
            ], 
        ]);
    }
}
 
