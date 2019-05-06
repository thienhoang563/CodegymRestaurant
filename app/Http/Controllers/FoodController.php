<?php

namespace App\Http\Controllers;

use App\Food;
use App\Http\Requests\FoodsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{

    public function getAllFood() {
        $foods = Food::paginate(5);
        return view('admin.foods.list', compact('foods'));
    }
    public function createFood() {
        return view('admin.foods.add');
    }
    public function storeFood(FoodsRequest $request) {
        $food = new Food();

        $food->food_name = $request->input('food_name');
        $food->food_type = $request->input('food_type');
        $food->food_description = $request->input('food_description');
        $food->food_price = $request->input('food_price');
        $food->food_rating = $request->input('food_rating');
        if ($request->hasFile('food_image')) {
            $image = $request->file('food_image');
            $path = $image->store('images', 'public');
            $food->food_image = $path;
        }

        $food->save();
        Session::flash('success', 'Đã thêm món ăn mới.');
        return redirect()->route('admin.foods.list');
    }
    public function editFood($id) {
        $food = Food::findOrFail($id);
        return view('admin.foods.edit', compact('food'));
    }


    public function updateFood(FoodsRequest $request, $id)
    {
        $food = Food::findOrFail($id);
        $food->food_name = $request->input('food_name');
        $food->food_type = $request->input('food_type');
        $food->food_description = $request->input('food_description');
        $food->food_price = $request->input('food_price');
        $food->food_rating = $request->input('food_rating');
//        $file = $request->inputFile;

        if ($request->hasFile('food_image')) {
            $image = $request->file('food_image');
            $path = $image->store('images', 'public');
            $food->food_image = $path;
        }
        $food->save();
        Session::flash('success', 'Đã sửa món ăn.');

        return redirect()->route('admin.foods.list');
    }
    public function destroyFood($id) {
        $food = Food::findOrFail($id);
        $food->delete();
        Session::flash('success', 'Đã xóa món ăn.');
        return redirect()->route('admin.foods.list');
    }
    public function show($id) {
        $food = Food::find($id);
        return view('food-page.food-detail', compact('food'));
    }

}
