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
                'id'            => 1,
                'menu_value'    => 'Admin Dashboard',
                'route'         => '/dashboard/admin-dashboard',
                'active_link'   => '/dashboard/admin-dashboard',
                'has_sub_route' => true,
                'show_sub_route'=> true,
                'key'           => 'all_admins',
                'sequence'      => 1,
                'module_id'     => 1,
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 2,
                'menu_value'    => 'Teacher Dashboard',
                'route'         => '/dashboard/teacher-dashboard',
                'active_link'   => '/dashboard/teacher-dashboard',
                'has_sub_route' => true,
                'show_sub_route'=> true,
                'key'           => 'all_teacher',
                'sequence'      => 2,
                'module_id'     => 1,
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 3,
                'menu_value'    => 'Student Dashboard',
                'route'         => '/dashboard/student-dashboard',
                'active_link'   => '/dashboard/student-dashboard',
                'has_sub_route' => true,
                'show_sub_route'=> true,
                'key'           => 'all_student',
                'sequence'      => 3,
                'module_id'     => 1,
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 4,
                'menu_value'    => 'Chat',
                'route'         => '/application/chat',
                'active_link'   => '/application/chat',
                'has_sub_route' => true,
                'show_sub_route'=> true,
                'key'           => 'all_chat',
                'sequence'      => 4,
                'module_id'     => 2,
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            
        ]);
    }
}
