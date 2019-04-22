<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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
        return view('admin.dashboard');
    }
    public function getAllUser() {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function createUser() {
        return view('admin.users.add');
    }
    public function storeUser(Request $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $file = $request->input('inputFile');
        if (!$request->hasFile('inputFile')) {
            $user->image = $file;
        } else {
            $fileName = $file->getClientOriginalName();
            $newFileName = $fileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $user->image = $newFileName;
        }
        $user->save();
        Session::flash('success', 'Them moi nguoi dung thanh cong');
        return redirect()->route('admin.users.list');
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'Đã xóa khách hàng.');
        return redirect()->route('admin.users.list');
    }

    public function editUser($id) {
        $user = User::findOrFail($id);
        return view('admin.users.update', compact('user'));
    }

    public function updateUser(FormExampleRequest $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $user->image = $file;
        } else {
            $fileName = $file->getClientOriginalName();
            $newFileName = $fileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $user->image = $newFileName;
        }

        $user->save();
        Session::flash('success', 'Cap nhat thanh cong');
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
        if (strcmp($request->get('new-password-confirm'), $request->get('new-password')) !== 0){
            return redirect()->back()->with("error", "New Password cannot be same as your confirm password. Please try again.");
        }

//        $validatedData = $request->validate([
//            'current-password' => 'required',
//            'new-password' => 'required|string|min:6|confirmed',
//            'new-password-confirm' => 'required|string|min:6|confirmed'
//        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }
}
