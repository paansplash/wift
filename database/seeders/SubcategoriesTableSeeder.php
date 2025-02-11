<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('subcategories')->delete();
        
        DB::table('subcategories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home Appliances',
                'category_id' => 1,
                'description' => 'TVs, Refrigerators, Washing Machines',
                'status_id' => 1,
                'created_at' => '2025-02-11 02:41:37',
                'updated_at' => '2025-02-11 02:41:37',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mobile Phones',
                'category_id' => 1,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:57:17',
                'updated_at' => '2025-02-11 02:57:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Laptops & Computers',
                'category_id' => 1,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:57:29',
                'updated_at' => '2025-02-11 02:57:29',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Tablets',
                'category_id' => 1,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:57:40',
                'updated_at' => '2025-02-11 02:57:40',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Smartwatches',
                'category_id' => 1,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:57:49',
                'updated_at' => '2025-02-11 02:57:49',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Headphones & Earbuds',
                'category_id' => 1,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:57:59',
                'updated_at' => '2025-02-11 02:57:59',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Cameras',
                'category_id' => 1,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:58:07',
                'updated_at' => '2025-02-11 02:58:07',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Gaming Consoles',
                'category_id' => 1,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:58:17',
                'updated_at' => '2025-02-11 02:58:17',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Men\'s Clothing',
                'category_id' => 2,
                'description' => 'Shirts, Pants, Suits, Shoes',
                'status_id' => 1,
                'created_at' => '2025-02-11 02:58:38',
                'updated_at' => '2025-02-11 02:59:49',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Women\'s Clothing',
                'category_id' => 2,
                'description' => 'Dresses, Tops, Skirts, Shoes',
                'status_id' => 1,
                'created_at' => '2025-02-11 02:58:53',
                'updated_at' => '2025-02-11 02:59:59',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Kids’ Clothing',
                'category_id' => 2,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:59:04',
                'updated_at' => '2025-02-11 02:59:04',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Accessories',
                'category_id' => 2,
                'description' => 'Bags, Wallets, Sunglasses',
                'status_id' => 1,
                'created_at' => '2025-02-11 02:59:24',
                'updated_at' => '2025-02-11 02:59:24',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Jewelry & Watches',
                'category_id' => 2,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 02:59:34',
                'updated_at' => '2025-02-11 02:59:34',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Furniture',
                'category_id' => 3,
                'description' => 'Beds, Sofas, Tables, Chairs',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:11:09',
                'updated_at' => '2025-02-11 03:11:09',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Home Decor',
                'category_id' => 3,
                'description' => 'Wall Art, Rugs, Curtains',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:11:45',
                'updated_at' => '2025-02-11 03:11:45',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Kitchenware',
                'category_id' => 3,
                'description' => 'Cookware, Tableware',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:12:00',
                'updated_at' => '2025-02-11 03:12:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Lighting',
                'category_id' => 3,
                'description' => 'Lamps, Ceiling Lights',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:12:15',
                'updated_at' => '2025-02-11 03:12:15',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Skincare',
                'category_id' => 4,
                'description' => 'Moisturizers, Serums, Face Masks',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:12:40',
                'updated_at' => '2025-02-11 03:12:40',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Haircare',
                'category_id' => 4,
                'description' => 'Shampoo, Conditioners, Hair Dryers',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:12:57',
                'updated_at' => '2025-02-11 03:12:57',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Makeup',
                'category_id' => 4,
                'description' => 'Lipstick, Foundation, Eyeshadow',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:13:12',
                'updated_at' => '2025-02-11 03:13:12',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Fragrances',
                'category_id' => 4,
                'description' => 'Perfumes, Colognes',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:13:27',
                'updated_at' => '2025-02-11 03:13:27',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Vitamins & Supplements',
                'category_id' => 5,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:14:14',
                'updated_at' => '2025-02-11 03:14:14',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Fitness Equipment',
                'category_id' => 5,
                'description' => 'Yoga Mats, Dumbbells',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:14:40',
                'updated_at' => '2025-02-11 03:14:40',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Medical Supplies',
                'category_id' => 5,
                'description' => 'First Aid, Blood Pressure Monitors',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:15:05',
                'updated_at' => '2025-02-11 03:15:05',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Sports Equipment',
                'category_id' => 6,
                'description' => 'Football, Basketball, Tennis',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:20:05',
                'updated_at' => '2025-02-11 03:20:05',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Camping & Hiking Gear',
                'category_id' => 6,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:20:17',
                'updated_at' => '2025-02-11 03:20:17',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Gym Equipment',
                'category_id' => 6,
                'description' => 'Treadmills, Weights',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:20:36',
                'updated_at' => '2025-02-11 03:20:36',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Car Accessories',
                'category_id' => 7,
                'description' => 'Seat Covers, Floor Mats',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:20:59',
                'updated_at' => '2025-02-11 03:20:59',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Motorcycle Accessories',
                'category_id' => 7,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:21:15',
                'updated_at' => '2025-02-11 03:21:15',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Spare Parts',
                'category_id' => 7,
                'description' => 'Tires, Batteries',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:21:33',
                'updated_at' => '2025-02-11 03:21:33',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Fresh Produce',
                'category_id' => 8,
                'description' => 'Fruits, Vegetables',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:22:00',
                'updated_at' => '2025-02-11 03:22:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Beverages',
                'category_id' => 8,
                'description' => 'Tea, Coffee, Soft Drinks',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:22:21',
                'updated_at' => '2025-02-11 03:22:21',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Snacks',
                'category_id' => 8,
                'description' => 'Chips, Chocolate, Biscuits',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:22:44',
                'updated_at' => '2025-02-11 03:22:44',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Frozen Foods',
                'category_id' => 8,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:22:57',
                'updated_at' => '2025-02-11 03:22:57',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Organic & Health Foods',
                'category_id' => 8,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:23:10',
                'updated_at' => '2025-02-11 03:23:10',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Baby Gear',
                'category_id' => 9,
                'description' => 'Strollers, Car Seats',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:23:33',
                'updated_at' => '2025-02-11 03:23:33',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Toys & Games',
                'category_id' => 9,
                'description' => 'Board Games, Action Figures',
                'status_id' => 1,
                'created_at' => '2025-02-11 03:23:49',
                'updated_at' => '2025-02-11 03:23:49',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Kids’ Clothing & Footwear',
                'category_id' => 9,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:24:01',
                'updated_at' => '2025-02-11 03:24:01',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Fiction & Non-Fiction',
                'category_id' => 10,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:24:18',
                'updated_at' => '2025-02-11 03:24:18',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'School & Office Supplies',
                'category_id' => 10,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:24:32',
                'updated_at' => '2025-02-11 03:24:32',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Art & Craft Materials',
                'category_id' => 10,
                'description' => NULL,
                'status_id' => 1,
                'created_at' => '2025-02-11 03:24:41',
                'updated_at' => '2025-02-11 03:24:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}