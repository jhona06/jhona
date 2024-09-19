<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            ['id' => 4, 'user_id' => null, 'total' => 1163.00, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'user_id' => null, 'total' => 327.00, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'user_id' => null, 'total' => 545.00, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
            // Add the rest of the orders...
        ]);
    }
}
