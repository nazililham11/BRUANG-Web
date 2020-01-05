<?php

namespace App\Http\Controllers\Api;

use App\Room;
use Validator;
use App\Booking;
use App\ClassSession;
use App\ClassSchedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function login(){ 
    	$validator = Validator::make(request()->all(), [
            "user_id" 	=> "required|exists:users,user_id",
            "password"	=> "required|min:4",
        ]);

    	if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->first()]);        
        }
		if(Auth::attempt(['user_id' => request('user_id'), 'password' => request('password')])){ 
			
		   	$user = Auth::user(); 
		   	$success['status'] = 'success';
		   	$success['message'] = 'Login Success';
		   	$success['user'] = $user->only('name', 'user_id');
		   	$success['user']['token'] =  $user->createToken('AppName')->accessToken; 

		    return response()->json($success, 200); 
	  	} else{ 
		   	return response()->json(['status' => 'error', 'message' => 'Unauthorised'], 401); 
	   	} 
	}

	public function details(Request $request) 
    { 
        $user = Auth::user(); 
        $token = $request->header('Authorization');
        $token = str_replace('Bearer ', '', $token);
        $success['status'] = 'success';
        $success['message'] = 'Get User Details Success';
        $success['user'] = $user->only('name', 'user_id');
        $success['user']['token'] =  $token; 
        return response()->json($success, 200); 
    } 

    public function logout() 
    { 
        auth()->guard('api')->logout();
        return response()->json(['success' => 'success'], 200); 
    } 
}
