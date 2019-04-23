<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Food;

class HomeController extends Controller
{
    public function getAllAdvertisement() {
        $advertisements = Advertisement::all();
        return view('/welcome', compact('advertisements'));
    }
    public function getAllFood() {
        $foods = Food::all();
        return view('food-page.ListFood', compact('foods'));
    }
}
