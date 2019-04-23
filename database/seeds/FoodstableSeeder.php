<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = new Food();
        $food->food_name = 'Rau dền';
        $food->food_type = \App\Http\Controllers\FoodType::RAU;
        $food->food_description = 'Đặc sản đồng quê, phải ăn món này mới hiểu nỗi lòng của người nông dân quanh năm chăn rau';
        $food->food_image = '';
        $food->food_price = '15000';
        $food->food_rating = '';
        $food->save();

    }
}
