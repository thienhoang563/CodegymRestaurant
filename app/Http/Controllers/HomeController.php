<?php

namespace App\Http\Controllers;

use App\Advertisement;

class HomeController extends Controller
{
    public function getAllAdvertisement() {
        $advertisements = Advertisement::all();
        return view('/welcome', compact('advertisements'));
    }
}
