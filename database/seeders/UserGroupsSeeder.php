<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM user_groups');

        DB::table('user_groups')->insert([
            [
                'id'            => 1,
                'name'          => "Super Admin",
                'info'          => "Super Admin",
                'updated_by'    => 12,                               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 2,
                'name'          => "Admin",
                'info'          => "Admin",
                'updated_by'    => 0,               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 3,
                'name'          => "Teacher",
                'info'          => "Teacher",
                'updated_by'    => 0,                               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 4,
                'name'          => "Accountant",
                'info'          => "Accountant",
                'updated_by'    => 1,               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 5,
                'name'          => "Exam Controller",
                'info'          => "Exam Controller",
                'updated_by'    => 7,               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 6,
                'name'          => "Assistant Accountant",
                'info'          => "Assistant Accountant",
                'updated_by'    => 1,               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 7,
                'name'          => "Students",
                'info'          => "Students",
                'updated_by'    => 1,               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 7,
                'name'          => "Guardians",
                'info'          => "Guardians",
                'updated_by'    => 1,               
                'created_at'    => $date,
                'updated_at'    => $date,
            ]
        ]);
    }
}
 
