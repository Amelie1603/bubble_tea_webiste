<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    function userLogin(Request $request)
    {
        $data= $request->input();
        $request->session()->put('users', $data['users']);
        return redirect('/');
    }
}
