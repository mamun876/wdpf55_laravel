<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
         'name' => 'shoe',
        ]);
        DB::table('categories')->insert([
            'name' => 'shirt',
           ]);
           DB::table('categories')->insert([
            'name' => 'belt',
           ]);
    }
}
