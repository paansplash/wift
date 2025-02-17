<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishlistItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('wishlist_items')->delete();
        
        DB::table('wishlist_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'wishlist_id' => 1,
                'inventory_id' => 1,
                'status_id' => 1,
                'created_at' => '2025-02-11 14:45:09',
                'updated_at' => '2025-02-11 14:45:09',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'wishlist_id' => 1,
                'inventory_id' => 2,
                'status_id' => 1,
                'created_at' => '2025-02-11 14:45:17',
                'updated_at' => '2025-02-11 14:45:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}