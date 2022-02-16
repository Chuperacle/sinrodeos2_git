<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $var = rand(1,100);
        return view('usuario')->with('numero',$var);
        
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nombre' =>['required | min:3 | max:20'],
            'email' =>['required | min:3 | email'],
            'pass1' =>['required | min:3 | required_with: pass2 | same:pass2'],
            'pass2' =>['required | min:3 | '],


        ]);
        
        $validateData = $request->validateWithBag('post',[
            'nombre' =>['required | min:3 | max:20'],
            'email' =>['required | min:3 | email'],
            'pass1' =>['required | min:3 | required_with: pass2 | same:pass2'],
            'pass2' =>['required | min:3 | '],
        ]);
        dd($request);
    }
}
