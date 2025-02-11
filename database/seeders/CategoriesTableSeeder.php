<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Electronic',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:28:27',
                'updated_at' => '2025-02-11 02:45:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fashion',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:44:18',
                'updated_at' => '2025-02-11 02:44:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Home & Furniture',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:44:38',
                'updated_at' => '2025-02-11 02:45:59',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Beauty & Personal Care',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:44:58',
                'updated_at' => '2025-02-11 02:44:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Health & Wellness',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:46:13',
                'updated_at' => '2025-02-11 02:46:13',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Sports & Outdoor',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:46:27',
                'updated_at' => '2025-02-11 02:46:44',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Automotive & Accessories',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:47:01',
                'updated_at' => '2025-02-11 02:47:01',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Groceries & Food',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:47:13',
                'updated_at' => '2025-02-11 02:47:13',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Toys & Baby Products',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:47:22',
                'updated_at' => '2025-02-11 02:47:22',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Books & Stationery',
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:47:32',
                'updated_at' => '2025-02-11 02:47:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}