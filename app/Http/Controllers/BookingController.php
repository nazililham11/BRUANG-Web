<?php

namespace App\Http\Controllers;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); 
     
        $bookings = Booking::with(['class_schedule.room', 'class_schedule.class_session'])
                    ->orderBy('created_at', 'DESC')
                    ->get();
        
        return view('admin.booking.index', compact('bookings')); 
    }

    public function action($id, Request $request)
    {
        // dd($request->action);
        $booking = Booking::where('id', $id)
                    ->first();

        if ($request->action == "accept"){
            $booking['status'] = 'Accepted';
        } else if ($request->action == "reject"){
            $booking['status'] = 'Rejected';
        } else {
            return redirect()->back()->with(['error' => 'Oops, An Error Occured']);     
        }
        $booking->save();
        return redirect()->back(); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
