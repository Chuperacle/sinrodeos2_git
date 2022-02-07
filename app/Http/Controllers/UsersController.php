<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $var = rand(1,100);
        return view('admin')->with('numero',$var);
        
    }
}
