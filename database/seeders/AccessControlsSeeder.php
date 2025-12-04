<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AccessControlsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM access_controls');

        DB::table('access_controls')->insert([
            [
                'id'            => 1,
                'role_id'       => 4,
                'module_id'     => 3,                               
                'permission_id' => 1,
                'created_by'    => 1,                               
                'updated_by'    => 1,                               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 2,
                'role_id'       => 4,
                'module_id'     => 11,                               
                'permission_id' => 1,
                'created_by'    => 1,                               
                'updated_by'    => 1,                               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
            [
                'id'            => 3,
                'role_id'       => 4,
                'module_id'     => 11,                               
                'permission_id' => 1,
                'created_by'    => 1,                               
                'updated_by'    => 1,                               
                'created_at'    => $date,
                'updated_at'    => $date,
            ],
        ]);
    }
}
 
