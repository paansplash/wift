<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('roles')->delete();
        
        DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'description' => NULL,
                'created_at' => '2025-01-30 00:15:59',
                'updated_at' => '2025-01-30 00:15:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'description' => NULL,
                'created_at' => '2025-01-30 00:16:05',
                'updated_at' => '2025-01-30 00:16:05',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Vendor',
                'description' => NULL,
                'created_at' => '2025-01-30 00:16:11',
                'updated_at' => '2025-01-30 00:16:11',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'User',
                'description' => NULL,
                'created_at' => '2025-01-30 00:16:22',
                'updated_at' => '2025-01-30 00:16:22',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}