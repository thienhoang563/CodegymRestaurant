<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Http\Requests\OrderTableRequest;
use App\Table;
use Illuminate\Support\Facades\Session;

;

class HomeController extends Controller
{
    public function getAllAdvertisement() {
        $advertisements = Advertisement::all();
        return view('/welcome', compact('advertisements'));
    }
    public function orderTable(){
        return view('home-page.order-table.index');
    }
    public function confirmTable(OrderTableRequest $request) {
        $table = new Table();
        $table->name = $request->name;
        $table->phone = $request->phone;
        $table->email = $request->email;
        $table->restaurant_branch = $request->restaurant_branch;
        $table->order_date = $request->order_date;
        $table->num_of_customers = $request->num_of_customers;
        $table->desc = $request->desc;
        $table->save();
        Session::flash('success','Ban da dat ban thanh cong. Xin cam on!');
        return redirect()->route('home-page.order-table.index');
    }
}
