<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach (\App\Models\Restaurant::all() as $r) {
            for ($i = 0; $i < 3; $i++) {
                $data[] = [
                    'restaurant_id' => $r->id,
                    'img_path' => 'menu_image/' . rand(1,9) . '.jpg',
                ];
            }
        }
        DB::table('menus')->insert($data);
    }
}
