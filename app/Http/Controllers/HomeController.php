<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    // function home (){
    //     return view('/homepage_part/home');
    // }
    // // function signup (){
    // //     return view('/homepage_part/signupPart/signup');
    // // }
    // function db_signup (){
    //     return view('/homepage_part/signupPart/_dbConnection');
    // }

    function login (){
        return view("auth.login");
    }
    function signup (){
        return view("auth.signup");
    }
    function save(Request $request){
        // return $request->input();

        // validate request 
        $request->validate([
            'email'=>'required|unique:admins',
        ]);

        // insert data in database

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone_no = $request->phone_no;
        $admin->username = $request->username;
        $admin->st_date = $request->st_date;
        $admin->org_size = $request->org_size;
        $admin->password = Hash::make($request->password);
        $admin->sponsor = $request->sponsor;

        $save = $admin->save();

        if($save){
            return back()->with('Success', 'New user created successfully');
        }
        else{
            return back()->with('Fail', 'Something want wrong');
        }
    }

    function check(Request $request){
        // return $request->input();

        $userInfo = Admin::where('email', '=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail', 'we do not recognized');
        }
        else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('users/dashboard');
            }
            else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    function dashboard(){
        return view("users.dashboard");
    }
    
    function profile(){
        return view("users.profile");
    }
}
