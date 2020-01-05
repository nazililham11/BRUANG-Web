<?php

namespace App\Http\Controllers\Api;

use App\Room;
use Validator;
use App\Booking;
use App\ClassSession;
use App\ClassSchedule;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 

class BookingController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user(); 
        // $bookings = DB::table('bookings')->where('user_id', $user->id)->get();       
        $bookings = Booking::where('user_id', $user->id)->with(['class_schedule.room', 'class_schedule.class_session'])->get();
        $success['status'] = 'success';
        $success['message'] = 'success';
        $success['bookings'] = $bookings;

        return response()->json($success, 200); 
    }

    public function store(Request $request)
    {

        $validator = Validator::make(request()->all(), [
            "class_schedule_id" => "required|exists:class_schedules,id",
            "title"             => "required|max:100",
            "date"              => "required|date|after_or_equal:today",
            "day"               => "required|integer|between:1,6",
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);        
        }

        $user = Auth::user(); 

        $booking = Booking::create([
            'user_id' => $user->id,
            'course_id' => 1,
            'class_schedule_id' => $request->class_schedule_id,
            'title' => $request->title,
            'status' => 'Pending',
            'date' => $request->date,
            'day' => $request->day,
            'message' => '',
        ]);
        $booking->save();

        DB::commit();
        
        $bookings = DB::table('bookings')->where('user_id', $user->id)->get();


        $success['status'] = 'success';
        $success['message'] = 'Booking Success';

        return response()->json($success, 200); 
        
    }

    
}
