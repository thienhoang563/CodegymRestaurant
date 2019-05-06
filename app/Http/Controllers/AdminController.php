<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Table;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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

    public function getAllUser()
    {
        $users = User::paginate(5);
        return view('admin.users.list', compact('users'));
    }

    public function createUser()
    {
        if (Gate::allows('role','1')){

        } elseif (Gate::denies('role','2')){
            Session::flash('error', 'You can not create account!');
        }
        return view('admin.users.add');
    }

    public function storeUser(Request $request)
    {
        if (Gate::allows('role','1')){
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));

            if ($request->hasFile('user_image')) {
                $image = $request->file('user_image');
                $path = $image->store('images', 'public');
                $user->image = $path;
            }
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $path = $image->store('images', 'public');
//            $user->image = $path;
//        }
            $user->role = $request->input('role');
            $user->save();
            Session::flash('success', 'Created new user!');
        } elseif (Gate::denies('role','2')){
            Session::flash('error', 'You can not create account!');
        }

        return redirect()->route('admin.users.list');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        if (Gate::allows('role', '1')) {
            $user->delete();
            Session::flash('success', 'User Deleted.');
        } elseif (Gate::denies('role', '2')) {
            Session::flash('error', 'You can not delete this account!');
        }
        return redirect()->route('admin.users.list');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);

        if (Gate::allows('role', '1')) {

        } elseif (Gate::denies('role', '2')) {
            Session::flash('error', 'You can not update profile this account');
            return redirect()->route('admin.users.list');
        }
        return view('admin.users.update', compact('user'));
    }

    public function updateUser(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        if (Gate::allows('role', '1')) {

            $user->name = $request->input('name');
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = $image->store('images', 'public');
                $user->image = $path;
                $user->save();
                Session::flash('success', 'Update user success!');
            }
        } elseif (Gate::denies('role', '2')) {
            Session::flash('error', 'You can not update profile this account');
            return redirect()->route('admin.users.list');
        }
        return redirect()->route('admin.users.list');
    }

    public function showChangePasswordForm()
    {
        return view('admin.users.change-password');
    }

    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success", "Password changed successfully !");
    }

    public function getAllTable()
    {
        $tables = Table::all();
        return view('admin.order-table.list', compact('tables'));
    }

    public function destroyTable($id)
    {
        $table = Table::findOrFail($id);
        $table->delete();
        Session::flash('success', 'Xóa bàn thành công ');
        return redirect()->route('admin.order-table.list');
    }
}
