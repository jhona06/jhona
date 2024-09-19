<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('menu_items')->truncate();
        DB::table('menu_items')->updateOrInsert(
            ['id' => 1],
            ['name' => 'Pizza', 'price' => 12.50, 'created_at' => now(), 'updated_at' => now(), 'category_id' => null]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 2],
            ['name' => 'Burger', 'price' => 8.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => null]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 3],
            ['name' => 'Chickstrip', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 1]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 4],
            ['name' => 'Paresilog', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 1]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 5],
            ['name' => 'Bulaksilog', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 1]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 6],
            ['name' => 'Liemposilog', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 1]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 7],
            ['name' => 'Bangsilog', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 1]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 8],
            ['name' => 'Spamsilog', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 1]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 9],
            ['name' => 'Tapsilog', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 1]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 10],
            ['name' => 'Tocilog', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 1]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 11],
            ['name' => 'Lechon kawali', 'price' => 120.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 2]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 12],
            ['name' => 'Pork sisig', 'price' => 120.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 2]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 13],
            ['name' => 'Cheesy chick', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 2]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 14],
            ['name' => 'Sacramento', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 2]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 15],
            ['name' => 'Salted egg', 'price' => 109.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 2]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 16],
            ['name' => 'Soy garlic', 'price' => 99.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 2]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 17],
            ['name' => 'Buffalo', 'price' => 99.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 2]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 18],
            ['name' => 'Solo Spaghetti', 'price' => 139.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 3]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 19],
            ['name' => 'Solo Carbonara', 'price' => 139.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 3]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 20],
            ['name' => 'Aglio Olio', 'price' => 139.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 3]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 21],
            ['name' => 'Iced tea', 'price' => 49.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 4]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 22],
            ['name' => 'Cucumber', 'price' => 49.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 4]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 23],
            ['name' => 'Blue lemonade', 'price' => 49.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 4]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 24],
            ['name' => 'Pink lemonade', 'price' => 49.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 4]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 25],
            ['name' => 'Choco milk tea (16oz)', 'price' => 49.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 5]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 26],
            ['name' => 'Winter milk tea (16oz)', 'price' => 49.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 5]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 27],
            ['name' => 'Okinawa milk tea (16oz)', 'price' => 49.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 5]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 28],
            ['name' => 'Choco milk tea (22oz)', 'price' => 59.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 5]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 29],
            ['name' => 'Winter milk tea (22oz)', 'price' => 59.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 5]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 30],
            ['name' => 'Okinawa milk tea (22oz)', 'price' => 59.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 5]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 31],
            ['name' => 'Mocha latte (Small)', 'price' => 59.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 6]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 32],
            ['name' => 'Vanilla latte (Small)', 'price' => 59.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 6]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 33],
            ['name' => 'Mocha latte (Large)', 'price' => 69.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 6]
        );
        DB::table('menu_items')->updateOrInsert(
            ['id' => 34],
            ['name' => 'Vanilla latte (Large)', 'price' => 69.00, 'created_at' => now(), 'updated_at' => now(), 'category_id' => 6]
        );

        foreach ($menuItems as $menuItem) {
            DB::table('menu_items')->updateOrInsert(
                ['id' => $menuItem['id']], // Condition to check for existing records
                [
                    'name' => $menuItem['name'],
                    'price' => $menuItem['price'],
                    'created_at' => now(),
                    'updated_at' => now(),
                    'category_id' => $menuItem['category_id'],
                ]
            );
        }
    }  
}