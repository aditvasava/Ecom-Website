<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
  function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
         return redirect('login');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function display()
    {
      return view('login');
    }

    function logout()
    {
      Session::forget('user');
      return redirect('/');
    }

    function registerl()
    {
      return view('register');
    }

    function register(Request $r)
    {
      $name=$r->uname;
      $phone=$r->uph;
      $email=$r->uemail;
      $password=$r->upass;
      $cpassword=$r->ucpass;

      $check_username = User::where('email',$email)->get();
      if(count($check_username)>0)
        {
        return redirect('registerl')->with('E-mail already exists. Please enter another E-mail ID.');
        }
      else if($password!=$cpassword)
        {
          return redirect('registerl')->with('Password could not be verified. Please Try Again.');
        }
      else
        {

      $reg=new User;

      $reg->name=$name;
      $reg->phone=$phone;
      $reg->email=$email;
      $reg->password=Hash::make($password);
      $created = $reg->save();
      return redirect('login');
    }
}
}
