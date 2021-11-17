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
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        // $this->call(RestaurantSeeder::class);
        \App\Models\Restaurant::factory(20)->create();
        // $this->call(AdminTablesSeeder::class);
        $this->call(MenuSeeder::class);
    }
}
