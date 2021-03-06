<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Food;
use App\Http\Requests\OrderTableRequest;
use App\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

;

class HomeController extends Controller
{
    public function getAllFood()
    {
        $foods = Food::paginate(6);
        $foodtotal = Food::all();
        return view('food-page.ListFood', compact('foods', 'foodtotal'));
    }

    public function getAllAdvertisement()
    {
        $advertisements = Advertisement::all();
        return view('/welcome', compact('advertisements'));
    }

    public function orderTable()
    {
        return view('home-page.order-table.index2');
    }

    public function confirmTable(OrderTableRequest $request)
    {
        $table = new Table();
        $table->name = $request->name;
        $table->phone = $request->phone;
        $table->email = $request->email;
        $table->restaurant_branch = $request->restaurant_branch;
        $table->order_date = $request->order_date;
        $table->hour = $request->order_hour;
        $table->num_of_customers = $request->num_of_customers;
        $table->desc = $request->desc;
        $table->save();
        Session::flash('success', 'Bạn đã đặt bàn thành công, cảm ơn đã sử dụng dịch vụ!');
        return redirect()->route('home.order-table2');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('name_food');

        if (!$keyword) {

            return redirect()->route('food-page');

        }
        $foods = Food::where('food_name', 'LIKE', '%' . $keyword . '%')
            ->paginate(6);

        return view('food-page.foodlist-detail', compact('foods'));
    }
}
