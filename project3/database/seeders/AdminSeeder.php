<?php

namespace Database\Seeders;

use App\Http\Middleware\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;






class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'ibnat',
            'email' => 'ibnat@gmail.com',
            'password' => Hash::make('ibnat'),
        ]);
    }
}
