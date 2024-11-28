<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'id' => 16,
                'created_at' => '2024-10-15 02:57:02',
                'updated_at' => '2024-10-15 08:07:23',
                'name' => 'Khách hàng 3',
                'email' => 'thanhhungg@gmail.com',
                'phone' => '0913849547',
                'address' => 'Sài Gòn',
                'status' => 0,
                'total' => 6700000,
                'payments' => 0,
                'cusId' => 2,
            ],
            [
                'id' => 17,
                'created_at' => '2024-10-15 08:05:30',
                'updated_at' => '2024-10-16 04:41:36',
                'name' => 'Khách hàng 1',
                'email' => 'ninhhieu@gmail.com',
                'phone' => '0913849547',
                'address' => 'Ninh Thuận',
                'status' => 4,
                'total' => 6700000,
                'payments' => 0,
                'cusId' => 3,
            ],
            [
                'id' => 18,
                'created_at' => '2024-10-16 04:23:01',
                'updated_at' => '2024-10-16 07:23:21',
                'name' => 'Khách hàng 1',
                'email' => 'ngockhanh@gmail.com',
                'phone' => '0913849547',
                'address' => 'Bình Phước',
                'status' => 1,
                'total' => 4740000,
                'payments' => 0,
                'cusId' => 3,
            ]
        ]);
    }
}
