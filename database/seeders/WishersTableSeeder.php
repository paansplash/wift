<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('wishers')->delete();
        
        DB::table('wishers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'name' => 'Test 1',
                'phone_no' => '0166193227',
                'addr1' => '1434, Jalan BSS 2/4A,',
                'addr2' => 'Bandar Seremban Selatan',
                'addr3' => NULL,
                'postcode' => '71450',
                'city' => 'Seremban',
                'state' => 'Negeri Sembilan',
                'created_at' => '2025-02-11 10:45:23',
                'updated_at' => '2025-02-11 10:45:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}