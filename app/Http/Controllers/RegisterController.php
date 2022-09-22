<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        //dd($request);
        //dd($request->get('username'));

        $this->validate($request, [
            'name' => 'required|min:2|max:50', // ['required', 'min:2']
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|min:8'
        ]);


    }
}
