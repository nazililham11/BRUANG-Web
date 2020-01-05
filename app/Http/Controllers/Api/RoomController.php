<?php

namespace App\Http\Controllers\Api;

use App\Room;
use Validator;
use App\Booking;
use Carbon\Carbon;
use App\ClassSession;
use App\ClassSchedule;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index(Request $request)
    {

        $validator = Validator::make(request()->all(), [
            "dates"    => "required|array|min:1|max:6",
            "dates.*"  => "required|date|after_or_equal:today",
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);        
        }

        $datas = array();
        
        foreach ($request->dates as $date) {

            $day = Carbon::parse($date)->dayOfWeek;
        
            //Get Booking Item
            $bookings = DB::table('bookings')->where('day', $day)->get('class_schedule_id');
            
            //Get Course Schedule Item
            $courses = DB::table('course_schedules')
                            ->join('class_schedules', 'class_schedules.id', '=', 'course_schedules.class_schedule_id')
                            ->where('class_schedules.day', $day)
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

            $data = ClassSchedule::with(['room', 'class_session'])
                                ->where('day', $day) 
                                ->whereNotIn('id', $courseItems)
                                ->whereNotIn('id', $bookingsRecord)
                                ->limit(3)
                                ->get();
            
            foreach ($data as $schedule) {
                $schedule['date'] = $date;
            }

            array_push($datas, $data);

        }

        $datas = Arr::collapse($datas);

        $success['status'] = 'success';
        $success['message'] = 'success';
        $success['available_rooms'] = $datas;
        return response()->json($success, 200);
        
        //Get Class Schedule Where not in booking and Course Schedule
        $datas = ClassSchedule::with(['room', 'class_session'])
                    ->where('day', 5)
                    ->whereNotIn('id', $courseItems)
                    ->whereNotIn('id', $bookingsRecord)
                    ->limit(10)
                    ->get();

        // $datas = DB::table('class_schedules')
        //         ->where('class_schedules.day', 5)
        //         ->whereNotIn('class_schedules.id', $courseItems)
        //         ->whereNotIn('class_schedules.id', $bookingsRecord)
        //         ->join('rooms', 'rooms.id', '=', 'class_schedules.room_id')
        //         ->join('class_sessions', 'class_sessions.id', '=', 'class_schedules.class_session_id')
        //         ->get(['*', 'class_schedules.id']);

        //Convert datas to JSON
    	// $datas = json_decode(json_encode($datas), true);

        //return datas
        $success['status'] = 'success';
        $success['message'] = 'success';
        $success['class_schedules'] = $datas;

        return response()->json($success, 200); 
        
    }
}
