<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Silog meals', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rice bowls', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pasta', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beverages', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
