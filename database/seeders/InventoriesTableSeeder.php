<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('inventories')->delete();
        
        DB::table('inventories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Panasonic Hair Dryer',
                'subcategory_id' => 1,
                'price' => '250.00',
                'quantity' => 10,
                'attachment' => NULL,
                'user_id' => 1,
                'status_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-02-11 14:23:08',
                'updated_at' => '2025-02-11 14:23:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Haier Hair Dryer',
                'subcategory_id' => 1,
                'price' => '150.00',
                'quantity' => 15,
                'attachment' => NULL,
                'user_id' => 1,
                'status_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-02-11 14:44:51',
                'updated_at' => '2025-02-11 14:44:51',
            ),
        ));
        
        
    }
}