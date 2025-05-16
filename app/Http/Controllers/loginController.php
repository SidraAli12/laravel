<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function showUserLogin()
    {

        return view('user.signup');

    }


     public function showlogin()
    {

        return view('user.login');

    }

    

   
    public function store(Request $request)
    {
        print_r($request->all());

        $user = new Users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return ('user save ');
    }
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('account') ;
        } else {
            return back()->withErrors(['message' => 'Invalid credentials']);
        }
    }

    //middleware

    public function account()
{
    if (!Auth::check()) {
        return redirect('/user/login'); // user is not logged in
    }

    return view('user.account');
}


}