<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'name' => 'Restaurant SPARTA',
                'name_kana' => 'レストラン スパルタ',
                'address' => '〒0287111 岩手県八幡平市大更35-62',
                'opentime' => 'lunch(11:00~14:00) dinner(18:30~22:00)',
                'holiday' => '不定休',
                'category' => '欧米・各国料理',
                'note' => '駐車場 30台 駅から徒歩30分 電子マネーは使用できません。',
                'pr_short' => '気のあう仲間たちと素敵な時間を過ごしてください。',
                'pr_long' => '多国籍の人たちが集う素敵な空間になっています。期間限定プランもありますのでお気軽に起こしください。',
            ],
            [
                'name' => 'Restaurant NEXT=REVOLUTION',
                'name_kana' => 'レストラン ネクストレボリューション',
                'address' => '〒0287111 岩手県八幡平市大更35-62',
                'opentime' => 'lunch(11:00~14:00) dinner(18:30~22:00)',
                'holiday' => '不定休',
                'category' => '欧米・各国料理',
                'note' => '駐車場 30台 駅から徒歩30分 電子マネーは使用できません。',
                'pr_short' => '気のあう仲間たちと素敵な時間を過ごしてください。',
                'pr_long' => '多国籍の人たちが集う素敵な空間になっています。期間限定プランもありますのでお気軽に起こしください。',
            ],
        ]);
    }
}
