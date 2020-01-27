<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registrationtable;
use Illuminate\Support\Facades\Auth;
use Hash;
class signupController extends Controller
{
  
    public function index(){
        if(Auth::user())
        {
            return view('home');
        }
        else{
            return redirect('/')->with('check','Either email or password is wrong!!!');
        }
    }
    public function register(){
        return view('registration');

    }

    public function usersignup(Request $request){
        $this->validate($request, [ 
            'firstname' => 'required', 
            'lastname' => 'required',
            'email' => 'required|unique:signupuser',
            'password' => 'required',
        ]);
     $store = new registrationtable();
     $store->firstname = $request->input('firstname');
     $store->lastname = $request->input('lastname');
     $store->email = $request->input('email');
     $store->password = bcrypt($request->input('password'));
     $store->save();
     return redirect('/')->with('message','you have successfully registered!!!');
    } 
    


    public function login(Request $request){
         $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        $userdata = array(
            'email'  => $email,
            'password'  => $password,
        );
        $user=registrationtable::where('email',$email)->first();
        if($user){
            if(Hash::check($password,$user->password)){
            return redirect('/showhomepage');
            // return view('home')->with('user',$user);
            }
            else{
                return redirect('/')->with('check','Either email or password is wrong!!!');
            }
        }
        else{
            return redirect('/')->with('check','Either email or password is wrong!!!');
        }
    }

    public function logout(Request $request){
        return redirect('/')->with('check','Logout Sucessfull!!!');
    }
}