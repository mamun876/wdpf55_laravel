<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;




class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Apple',
                'logo' => 'Apple.jpeg',
                'description' => 'It\'s a product of passion',
            ],
            [
                'name' => 'Microsoft',
                'logo' => 'Apple.jpeg',
                'description' => 'It\'s a product of passion',
            ],
            [
                'name' => 'Linux',
                'logo' => 'Apple.jpeg',
                'description' => 'It\'s a product of passion',
            ],
            // Add more brands as needed
        ];

        foreach ($brands as $brandData) {
            Brand::create($brandData);
        }
    }
}
