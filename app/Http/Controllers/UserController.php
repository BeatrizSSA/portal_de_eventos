<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function sayHello($userrr, $arg2)
    {
        return view('my_views.hello', ['user' => $userrr . ' / ' . $arg2]);
    }
}