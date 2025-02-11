<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('user.index',['users' => $users]);
    }

    function edit($id){
        $user = User::find($id);
        $data['user'] = $user;
        return view('user.edit',$data);
    }

    function edit_action(Request $req){
        //print_r($req->input());
        $obj_user = User::find($req->id);
        $obj_user ->name = $req->name;
        $obj_user ->email = $req->email;
        $obj_user ->password = $req->password;
        $obj_user ->save();
        return redirect('/users');
    }

    function delete(Request $req){
        $obj_user = User::find($req->id);
        $obj_user ->delete();
        return redirect('/users');
    }
}
