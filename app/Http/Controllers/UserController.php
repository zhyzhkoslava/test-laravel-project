<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        echo 'register() of UserController';
    }

    public function auth()
    {
        echo 'auth() of UserController';
    }

    public function show()
    {
        echo 'show() of UserController';
    }

    public function delete()
    {
        echo 'delete() of UserController';
    }
}
