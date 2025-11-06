<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('user.userList')->with('users',$users);
    }

    public function addNewUser()
    {
        return view('user.addNewUser');
    }

    public function registerNewUser(Request $request)
    {
        DB::table('users')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'user_type' => $request->user_type,
        ]);

        return redirect()->route('user.index');
    }

    public function editUserInfo($id)
    {
        $user = DB::table('users')->where('id',$id)->first();

        return view('user.editUser')->with('user',$user);
    }

    public function updateUserInfo(Request $request, $id)
    {
        $user = DB::table('users')->where('id',$id)->update(
            [
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'user_type' => $request->user_type,
            ]
        );

        return redirect()->route('user.index');
    }

    public function deleteUserInfo($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('user.index');
    }
}
