<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        $holiday = ['不定休', '月曜定休', '年中無休', '火、水、祝定休'];
        $category = ['居酒屋', '日本料理・郷土料理', 'すし・魚料理'];

        return [
            'name' => $name,
            'name_kana' => $name,
            'address' => $this->faker->address(),
            'opentime' => 'lunch(11:00~14:00) dinner(18:30~22:00)',
            'holiday' => $holiday[array_rand($holiday)],
            'category' => $category[array_rand($category)],
            'note' => '駐車場 ' . rand(3,30) . '台 駅から徒歩' . rand(1,30) . '分 電子マネーは使用できません。',
            'pr_short' => '気のあう仲間たちと素敵な時間を過ごしてください。',
            'pr_long' => '多国籍の人たちが集う素敵な空間になっています。期間限定プランもありますのでお気軽に起こしください。',
            'img_path' => 'restaurant_image/' . rand(1,9) . '.jpg',
        ];
    }
}
