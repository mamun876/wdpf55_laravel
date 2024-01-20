<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Yellow Shirt',
            'description' => 'Product description content',
            'image' => 'images/no_photo.jpeg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '1',
            'availability' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Black Shirt',
            'description' => 'Product description content',
            'image' => 'images/no_photo.jpeg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '2',
            'availability' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Boot',
            'description' => 'Product description content',
            'image' => 'images/no_photo.jpeg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '3',
            'availability' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'pant',
            'description' => 'Product description content',
            'image' => 'images/no_photo.jpeg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '4',
            'availability' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'belt',
            'description' => 'Product description content',
            'image' => 'images/no_photo.jpeg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '5',
            'availability' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Nike NH321',
            'description' => 'Product description content',
            'image' => 'images/no_photo.jpeg',
            'tags' => 'no tag',
            'price' => '1000',
            'category_id' => '6',
            'availability' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Gucci G21',
            'description' => 'Product description content',
            'image' => 'images/no_photo.jpeg',
            'tags' => 'no tag',
            'price' => '1000',
            'category_id' => '7',
            'availability' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Kappa K321',
            'description' => 'Product description content',
            'image' => 'images/no_photo.jpeg',
            'tags' => 'no tag',
            'price' => '1000',
            'category_id' => '8',
            'availability' => '1'
        ]);
  
        
    }
}
