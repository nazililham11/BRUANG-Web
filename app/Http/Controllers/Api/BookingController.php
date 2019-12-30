<?php

namespace App\Http\Controllers\Api;

use App\Room;
use App\Booking;
use App\ClassSession;
use Illuminate\Http\Request; 
use App\ClassSchedule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

class BookingController extends Controller
{

    public function getFreeRoom(Request $request)
    {

        $validatedData = Validator::make(request()->all(), [
            "dates"    => "required|array|min:1",
            "dates.*"  => "required|date|after_or_equal:today",
        ]);

        if ($validatedData->fails()) {
            return response()->json(['error' => $validatedData->errors()]);        
        }

        //Get Booking Item
        $bookings = DB::table('bookings')->where('day', 5)->get('class_schedule_id');
        
        //Get Course Schedule Item
        $courses = DB::table('course_schedules')
                        ->join('class_schedules', 'class_schedules.id', '=', 'course_schedules.class_schedule_id')
                        ->where('class_schedules.day', 5)
                        ->get('class_schedules.id')->toArray();

        //Convert to Array
        $bookingsRecord = array();
        $courseItems = array();

        foreach ($bookings as $booking) {
             array_push($bookingsRecord, $booking->class_schedule_id);
        }
        foreach ($courses as $val) {
            array_push($courseItems, $val->id);
        }

        // dd($bookingsRecord);
        // dd($courseItems);

        //Get Class Schedule Where not in booking and Course Schedule
        $datas = DB::table('class_schedules')
                ->where('class_schedules.day', 5)
                ->whereNotIn('class_schedules.id', $courseItems)
                ->whereNotIn('class_schedules.id', $bookingsRecord)
                ->join('rooms', 'rooms.id', '=', 'class_schedules.room_id')
                ->join('class_sessions', 'class_sessions.id', '=', 'class_schedules.class_session_id')
                ->get(['*', 'class_schedules.id']);

        //Convert datas to JSON
    	$datas = json_decode(json_encode($datas), true);

        //return datas
        return response()->json(['data' => $datas], 200); 
        
    }

    public function getBookings(Request $request)
    {
    	
    }

    
}
