<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UserController extends Controller
{
    public function createUser(){
        return view('users.create', [
            'title' => 'Create User'
        ]);
    }

    public function storeUser(Request $request){
        User::create([
            'name' => strtoupper($request->name),
            'age'  => strtoupper($request->age),
            'city' => strtoupper($request->city)
        ]);
        return redirect()->intended('/user');
    }
}
