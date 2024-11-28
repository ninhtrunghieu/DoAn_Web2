<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_owners')->insert([
            ['id' => 1, 'created_at' => '2024-10-04 03:48:06', 'updated_at' => '2024-10-11 03:48:06', 'owner_name' => 'Nội Thất Mộc Việt'],
            ['id' => 2, 'created_at' => '2024-10-04 03:48:06', 'updated_at' => '2024-10-11 03:48:06', 'owner_name' => 'Nội Thất Minh Tiến'],
            ['id' => 3, 'created_at' => '2024-10-04 03:48:06', 'updated_at' => '2024-10-11 03:48:06', 'owner_name' => 'Nội Thất Mộc Việt'],
            ['id' => 4, 'created_at' => '2024-10-04 03:48:06', 'updated_at' => '2024-10-11 03:48:06', 'owner_name' => 'Nội Thất Đại Phát'],
            ['id' => 5, 'created_at' => '2024-10-04 03:48:06', 'updated_at' => '2024-10-11 03:48:06', 'owner_name' => 'Nội Thất Cổ Điển'],
            ['id' => 6, 'created_at' => '2024-10-04 03:48:06', 'updated_at' => '2024-10-11 03:48:06', 'owner_name' => 'Nhựa & Inox Qui Phúc'],
        ]);
    }
}
