<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;


class LoginController extends Controller
{
    
    function login(Request $req)
    {
       // echo Hash::make("admin786");
            // $pass = $req->password;

            // echo $pass . "<br/>";

        /*
        $_pass = Hash::make($pass);

        echo $_pass;

        if(Hash::check($pass,$_pass))
        {
            echo "Correct Password";
        }
        else
        {
            echo "Incorrect Password";
        }*/


        /*
        $en_pass = Crypt::encryptString($pass);

        echo $en_pass ." <br>";

        $de_pass = Crypt::decryptString($en_pass);

        echo $de_pass;
        */


        return view("shop.login");

    }

    function check_login(Request $req)
    {
        $req->validate([
            "username" => "required|email",
            "password" => "required|min:6"
        ]);



        $user = User::where("email",$req->username)->first();

        if($user)
        {
            if(Hash::check($req->password,$user->password))
            {
                session(["username" => $user->email]);
                return redirect("shop");
            }
            else
            {
                return back()->with(["username"=>$req->username])->withErrors(["username" => "Invalid username/password"]);
            }
        }
        else
        {
           return back()->with(["username"=>$req->username])->withErrors(["username" => "Invalid username/password"]);
        }

    }
    function logout(Request $req)
    {
        $req->session()->forget("username");

        return redirect("login");
    }
}
