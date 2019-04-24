<?php

namespace App\Http\Controllers;
use App\User;
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

        $this->validate($request, [
            'email'=>'required|email|unique:users',
            'first_name'=>'required|max:120',
            'password'=> 'required|min:4'
        ]);
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = New User();

        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        return redirect()->route('dashboard');




    }

    public function SignIn(Request $request)
    {

           $this->validate($request,[
               'email'=> 'required',
               'password'=>'required'
           ]);


        if (Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back();

    }
}
