<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;






class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' =>"Mamun",
            'email' => 'mamun@gmail.com',
            'password' => Hash::make('password'),
            'role' => '1',
        ]);
        DB::table('users')->insert([
            'name' =>"Ikbal",
            'email' => 'ikbal@gmail.com',
            'password' => Hash::make('password'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' =>"Mizan",
            'email' => 'mizan@gmail.com',
            'password' => Hash::make('password'),
            'role' => '3',
        ]);
    }
}
