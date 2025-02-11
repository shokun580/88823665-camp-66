<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    //
    function index()
    {
        return view("login");
    }
    function login(Request $req)
    {
        $user = User::where('email', $req->email)->first();

        if($user && $req->password && Hash::check($req->password, $user->password)){
            session()->forget('error');
            session(['user'=>$user]);
            return redirect("/");
        }else{
            session(['error'=> 'ข้อมูลการเช้าสู่ระบบผิด']);
            return view('login',['email'=>$req->email]);
            //return redirect("/login");
        }
    }
}
