<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function register(){

        return view('auth.register');

    }

    public function project(){

       return view('/project');
    }
}
