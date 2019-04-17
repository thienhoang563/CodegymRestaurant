<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllAdvertisement() {
        $advertisements = Advertisement::all();
        return view('/welcome', compact('advertisements'));
    }
}
