<?php

namespace App\Http\Controllers;

use App\Food;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
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
            $fileName = $request->inputFileName;
            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = "$fileName.$fileExtension";
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
    public function editUser($id) {
        $user = User::findOrFail($id);
        return view('admin.users.update', compact('user'));
    }
    public function updateUser(Request $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        Session::flash('success', 'Update successful');
        return redirect()->route('admin.users.list');
    }
    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'Đã xóa khách hàng.');
        return redirect()->route('admin.users.list');
    }
    public function showChangePasswordForm(){
        return view('admin.users.change-password');
    }
    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'),Auth::user()->password)))
        {
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }


}
