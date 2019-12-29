<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function login(){ 
		if(Auth::attempt(['user_id' => request('user_id'), 'password' => request('password')])){ 
		   	$user = Auth::user(); 
		   	$success['token'] =  $user->createToken('AppName')-> accessToken; 

		    return response()->json(['success' => $success], 200); 
	  	} else{ 
		   	return response()->json(['error'=>'Unauthorised'], 401); 
	   	} 
	}
}
