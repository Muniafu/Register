<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class Manager extends Controller
{
    function login() {
        return view('login');
    }

    function registration() {
        return view('registration');
    }

    // Add data to the database
    function loginPost(Request $request) {
        // Validate request
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ],[
            'email.required'=>'Please enter your email',
            'email.email'=>'Please provide a valid email address',
            'password.required'=>'Please enter your password',
            'password.min'=>'Password must be at least 5 characters long',
            'password.max'=>'Password should not exceed 12 characters'
        ]);

        // Check user credentials in the database
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect(route('home'))->with('success','You have successfully logged in!');
        } else {
            return back(route('login'))->with('error','Incorrect Credentials');
        }
    }

    function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
        ]);
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        if(!$user){
            return back(route('login'))->with('error','Incorrect Credentials');
            }else{
                auth()->login($user);
                return redirect(route('login'))->with('success','Your account has been created and you are now logged in!');
        }
    }
    function logout(){
        Manager::logout();
        return redirect('login')->with('success','Logged out Successfully!');
    }
}
