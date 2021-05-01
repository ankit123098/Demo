<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function Login(Request $request){
    	$validator = \Validator::make($request->all(),[
    		'email'	=>	'required|email|exists:users,email',
    		'password'	=> 'required'
    	],[
    		'email.required'	=>	'Please Enter The Email.',
    		'email.email'		=>	'Please Enter The Valid Email.',
    		'email.exists'		=>	'Enter Email Dose Not Exist.',
    		'password.required'	=>	'Please Enter The Password.',
    	]);
    	$user = User::where('email',$request->email)->first();
    	if(empty($user)){
    		return \Redirect::back()->withErrors(['Please Check Your Email.']);
    	}
    	$validator->after(function($validator) use(&$user, $request) {
    		if($user){
    			if(!\Hash::check($request->password,$user->password)){
    				$validator->errors()->add('password','Invalid Password.');
    			}
    		}
    	});
    	if($validator->passes()){
    		if($user){
    		  session()->put('admin',$user->id);
              return \Redirect::to('/dashboard');
    		}
    	}
        else{
            return \Redirect::back()->withErrors($validator->errors()->toArray()['password']);
        }
    }

    public function Dashboard(){
        $data['title'] = 'Dashboard';
        return view('dashboard')->with($data);
    }
}
