<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(OrderDetailsSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(ProductOwnersSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(StatisticalsSeeder::class);
    }
}
