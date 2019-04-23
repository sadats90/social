<?php

namespace App\Http\Controllers;
use Auth;




use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class UserController extends Controller
{


    use AuthenticatesUsers;
   public function dashboard()
   {

       return view('dashboard');

   }


    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = New User;

        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        return redirect()->route('dashboard');




    }

    public function SignIn(Request $request)
    {

        if(Auth::check (['email'=>$request['email'], 'password'=>$request['password']])){
            return redirect()->route('dashboard');


        }
    return redirect()->back();

    }
}
