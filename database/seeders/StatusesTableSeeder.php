<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('statuses')->delete();
        
        DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Active',
                'created_at' => '2025-02-11 11:09:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Inactive',
                'created_at' => '2025-02-11 11:09:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Shipped',
                'created_at' => '2025-02-14 14:57:31',
                'updated_at' => '2025-02-14 14:57:31',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Delivered',
                'created_at' => '2025-02-14 14:57:38',
                'updated_at' => '2025-02-14 14:57:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Wished',
                'created_at' => '2025-06-24 13:28:58',
                'updated_at' => '2025-06-24 13:28:58',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Ordered',
                'created_at' => '2025-06-24 13:30:21',
                'updated_at' => '2025-06-24 13:30:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}