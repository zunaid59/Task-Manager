<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TeamLeaderController extends Controller
{
    public function index(){

        $users = User::all();
        return view('user.userList',compact('users'));
    }

    public function edit($id){

          $user = new User();

          $data = $user->find($id);

          return view('user.edit',compact('data'));
    }

    public function delete($id){

        $user = new User();

        $data = $user->find($id);

        $data->delete();

        return redirect('userList');
    }


}
