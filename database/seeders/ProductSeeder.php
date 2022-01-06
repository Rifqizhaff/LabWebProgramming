<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        DB::table('products')->insert([
            'id' => '1',
            'slug' => 'sapi-super', 
            'name' => 'Sapi Super', 
            'image' => $faker->image('public/images', 400, 300, null, false), 
            'category' => 'Sapi', 
            'description' => 'Sapi gemuk, sehat dan memiliki berat sekitar 50kg.', 
            'stock' => '25', 
            'price' => '4500000'
        ]);
        DB::table('products')->insert([
            'id' => '2',
            'slug' => 'ayam-jago', 
            'name' => 'Ayam Jago', 
            'image' => $faker->image('public/images', 400, 300, null, false), 
            'category' => 'Ayam', 
            'description' => 'Ayam gemuk, sehat dan memiliki berat sekitar 5kg.', 
            'stock' => '50', 
            'price' => '500000'
            ]);


        // DB::table('products')->insert([
        //     'id' => '1',
        //     'slug' => 'sapi-super', 
        //     'name' => 'Sapi Super', 
        //     'image' => 'public/images/sapi.jpg', 
        //     'category' => 'Sapi', 
        //     'description' => 'Sapi gemuk, sehat dan memiliki berat sekitar 50kg.', 
        //     'stock' => '25', 
        //     'price' => '4500000'
        // ]);
        // DB::table('products')->insert([
        //     'id' => '2',
        //     'slug' => 'ayam-jago', 
        //     'name' => 'Ayam Jago', 
        //     'image' => 'public/images/ayam.jpg', 
        //     'category' => 'Ayam', 
        //     'description' => 'Ayam gemuk, sehat dan memiliki berat sekitar 5kg.', 
        //     'stock' => '50', 
        //     'price' => '500000'
        // ]);
        // DB::table('products')->insert([
        //     'id' => '3',
        //     'slug' => 'ikan-mujair', 
        //     'name' => 'Ikan Mujair', 
        //     'image' => 'public/images/kambing.jpg', 
        //     'category' => 'Ikan', 
        //     'description' => 'Ikan gemuk, sehat dan memiliki berat sekitar 2kg.', 
        //     'stock' => '35', 
        //     'price' => '90000'
        // ]);
        // DB::table('products')->insert([
        //     'id' => '4',
        //     'slug' => 'kambing-raja', 
        //     'name' => 'Kambing Raja', 
        //     'image' => 'public/images/kambing.jpg', 
        //     'category' => 'Kambing', 
        //     'description' => 'Kambing gemuk, sehat dan memiliki berat sekitar 15kg.', 
        //     'stock' => '20', 
        //     'price' => '2000000'
        // ]);
    }
}
