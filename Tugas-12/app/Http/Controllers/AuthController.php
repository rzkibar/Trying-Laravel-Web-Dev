<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regist() {
        return view('pages/form');
    }

    public function submit(Request $request) {
        $firstname = $request['first_name'];
        $lastname = $request['last_name'];

        return view('pages/welcome', ['firstname' => $firstname, 'lastname' => $lastname]);
    }
}
