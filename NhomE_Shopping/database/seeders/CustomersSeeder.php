<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['id' => 1, 'created_at' => '2024-10-12 09:16:20', 'updated_at' => '2024-10-12 09:16:20', 'email' => 'thanhhung@gmail.com', 'name' => 'Nguyễn Thanh Hùng', 'password' => 'thanhhungg'],
            ['id' => 2, 'created_at' => '2024-10-12 09:19:20', 'updated_at' => '2024-10-12 09:19:20', 'email' => 'ninhhieu@gmail.com', 'name' => 'Ninh Trung Hiếu', 'password' => 'ninhhieu'],
            ['id' => 3, 'created_at' => '2024-10-12 09:53:07', 'updated_at' => '2024-10-12 09:53:07', 'email' => 'ngockhanh@gmail.com', 'name' => 'Ngọc Khánh', 'password' => 'ngockhanh'],
            ['id' => 4, 'created_at' => '2024-10-12 09:53:07', 'updated_at' => '2024-10-12 09:53:07', 'email' => 'duckhiem@gmail.com', 'name' => 'Hoàng Đức Khiêm', 'password' => 'duckhiem'],
            ['id' => 5, 'created_at' => '2024-10-12 09:59:07', 'updated_at' => '2024-10-12 09:53:07', 'email' => 'admin@gmail.com', 'name' => 'Admin', 'password' => 'admin123'],
        ]);
    }
}

