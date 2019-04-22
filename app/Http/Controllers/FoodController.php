<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{

    public function getAllFood() {
        $foods = Food::all();
        return view('admin.foods.list', compact('foods'));
    }
    public function createFood() {
        return view('admin.foods.add');
    }
    public function storeFood(Request $request) {
        $food = new Food();
        $food->food_name = $request->input('name');
        $food->food_type = $request->input('type');
        $food->food_description = $request->input('description');
        $food->food_price = $request->input('price');
        $food->food_rating = $request->input('rating');
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')){
            $food->food_image = $file;
        }else{
            $fileName = $file->getClientOriginalName();
            $newFileName = $fileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $food->food_image = $newFileName;
        }
        $food->save();
        Session::flash('success', 'Đã thêm món ăn mới.');
        return redirect()->route('admin.foods.list');
    }
    public function editFood($id) {
        $food = Food::findOrFail($id);
        return view('admin.foods.edit', compact('food'));
    }


    public function updateFood(Request $request, $id)
    {
        $food = Food::findOrFail($id);
        $food->food_name = $request->input('name');
        $food->food_type = $request->input('type');
        $food->food_description = $request->input('description');
        $food->food_price = $request->input('price');
        $food->food_rating = $request->input('rating');
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $food->food_image = $file;
        } else {
            $fileName = $file->getClientOriginalName();
            $newFileName = $fileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $food->food_image = $newFileName;
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
}
