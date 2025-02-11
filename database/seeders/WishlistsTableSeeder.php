<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishlistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('wishlists')->delete();
        
        DB::table('wishlists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'title' => '#usertried',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-02-11 11:04:09',
                'updated_at' => '2025-02-11 11:04:09',
            ),
        ));
        
        
    }
}