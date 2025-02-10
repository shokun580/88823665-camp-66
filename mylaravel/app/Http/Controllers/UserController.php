<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function index()
    {
        return view("user" ,['data'=>User::all()]);
    }
    function edit($id)
    {
        $users = User::find($id);
        return view('edituser',['data'=>$users]);
    }
    function edit_action(Request $req)
    {
        $user = User::find($req->id);
        $user->name = ($req->name == null)?$user->name:$req->name;
        $user->email = ($req->email == null)?$user->email:$req->email;
        $user->password =($req->password == null)?$user->password:$req->password;
        $user->save();
        return redirect('/user');
    }
    function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}

?>
