<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'password' => '$2y$12$EmaIVJFrdLw5y7Gy5JinoO9kqcGckT1B2ifWZQYr/bKhIFLzvgp.S',
                'email' => 'farhanafandi.ar@gmail.com',
                'email_verified_at' => NULL,
                'role_id' => 1,
                'created_at' => '2025-01-29 15:12:47',
                'updated_at' => '2025-01-30 01:25:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User',
                'password' => '$2y$12$xnykH4WqPmYiRvM9NEUuWu0LUUukY3t2bnp/4CmQ71U4c10JW1pbS',
                'email' => 'user@wift.com',
                'email_verified_at' => NULL,
                'role_id' => 4,
                'created_at' => '2025-01-30 01:57:46',
                'updated_at' => '2025-01-30 01:57:46',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}