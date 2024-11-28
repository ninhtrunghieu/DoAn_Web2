<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            ['id' => 21, 'created_at' => '2024-10-15 02:57:02', 'updated_at' => '2024-10-15 02:57:02', 'quantity' => 2, 'orderid' => 16, 'productid' => 34],
            ['id' => 22, 'created_at' => '2024-10-15 02:57:02', 'updated_at' => '2024-10-15 02:57:02', 'quantity' => 3, 'orderid' => 16, 'productid' => 21],
            ['id' => 23, 'created_at' => '2024-10-15 08:05:30', 'updated_at' => '2024-10-15 08:05:30', 'quantity' => 2, 'orderid' => 17, 'productid' => 33],
            ['id' => 24, 'created_at' => '2024-10-15 08:05:30', 'updated_at' => '2024-10-15 08:05:30', 'quantity' => 3, 'orderid' => 17, 'productid' => 24],
            ['id' => 25, 'created_at' => '2024-10-16 04:23:01', 'updated_at' => '2024-10-16 04:23:01', 'quantity' => 2, 'orderid' => 18, 'productid' => 20],
            ['id' => 26, 'created_at' => '2024-10-16 04:23:01', 'updated_at' => '2024-10-16 04:23:01', 'quantity' => 3, 'orderid' => 18, 'productid' => 24],
            ['id' => 27, 'created_at' => '2024-10-16 04:23:01', 'updated_at' => '2024-10-16 04:23:01', 'quantity' => 2, 'orderid' => 18, 'productid' => 25],
        ]);
    }
}
