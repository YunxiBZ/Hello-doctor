<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * handle login form for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        dd('login');
    }
        /**
     * handle signup form for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        dd('signup');
    }
}
