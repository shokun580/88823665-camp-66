<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function __construct()
    {
        $user = session()->get("user");
        if (!isset($user)) {
            echo "login please";
            die;
        }
    }
    function index()
    {
        return view("Home");
    }
}
