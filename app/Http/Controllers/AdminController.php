<?php

namespace App\Http\Controllers;

use App\Food;
use App\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }
    public function getAllUser() {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }
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
        $food->food_description = $request->input('description');
        $food->food_type = $request->input('type');
        $food->food_cook = $request->input('cooker');
        $food->food_price = $request->input('price');
        $food->food_rating = $request->input('rating');
        $food->food_status = $request->input('status');
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')){
            $food->food_picture_url = $file;
        }else{
            $fileName = $file->getClientOriginalName();
            //$fileExtension = $file->getClientOriginalExtension();
            $newFileName = $fileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $food->food_picture_url = $newFileName;
        }
        $food->save();
        return redirect()->route('admin.foods.list');
    }
    public function createUser() {
        return view('admin.users.add');
    }
    public function storeUser(Request $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return redirect()->route('admin.users.list');
    }
    public function storeAdvertisement(Request $request) {

    }

}
