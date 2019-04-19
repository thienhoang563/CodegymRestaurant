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
        $food->id = '1';
        $food->food_name = 'Rau dền';
        $food->food_description = 'Đặc sản đồng quê, phải ăn món này mới hiểu nỗi lòng của người nông dân quanh năm chăn rau';
        $food->food_type = 'Rau';
        $food->food_cook = 'Mr.HoaDao';
        $food->food_picture_url = 'https://7monngonmoingay.net/wp-content/uploads/2015/10/cach-lam-mon-canh-rau-den-nau-thit-bam-thanh-mat-ngot-lanh.jpg';
        $food->food_price = '15000';
        $food->food_rating = '10';
        $food->food_status = TRUE;
        $food->save();

        $food = new Food();
        $food->id = '2';
        $food->food_name = 'Ghẹ';
        $food->food_description = 'Đặc sản biển, món này thường được ăn cùng với rau rền.';
        $food->food_type = 'Đồ biển';
        $food->food_cook = 'Mr.HoaDao';
        $food->food_picture_url = 'https://www.iunauan.com/images/550x259/anh1_609258.jpg';
        $food->food_price = '150000';
        $food->food_rating = '10';
        $food->food_status = TRUE;
        $food->save();
    }
}
