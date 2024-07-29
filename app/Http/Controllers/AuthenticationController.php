<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthenticationController extends Controller
{
    public function index()
    {   
        return view('index');
    }

    public function store(Request $request)
    {
      //  dd($request);
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validator){
            $auth = new AuthModel();
            $auth->name = $request->name;
            $auth->email  = $request->email;
            $auth->password = hash::make($request->password);
            $auth->remember_token = $request->_token;              
            $auth->save();
            return redirect()->route('register')->with('success','You Are Register Successfully!');
        }

    }

    public function login()
    {
        return view('login');
    }

    public function logincheck(Request $request)
    {
        $creadesial = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);      
        if (Auth::attempt($creadesial)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('success', 'UserId or Password Incorrect');
        }               
    }    

    public function logout()
    {   
        Auth::logout();
        return redirect()->route('login');
    }

}
