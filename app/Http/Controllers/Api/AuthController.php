<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function login(){ 
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
		   	$user = Auth::user(); 
		   	$success['token'] =  $user->createToken('AppName')-> accessToken; 

		    return response()->json(['success' => $success], $this-> successStatus); 
	  	} else{ 
		   	return response()->json(['error'=>'Unauthorised'], 401); 
	   	} 
	}
}
