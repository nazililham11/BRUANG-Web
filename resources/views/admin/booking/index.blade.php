@extends('admin.layouts.main')
@section('title', config('app.name', 'BRUANG') . ' - Bookings')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-bordered table-inverse table-hover">
                <thead>
                    <tr>
                        <th>ID Dosen</th>
                        <th>Nama Dosen</th>
                        <th>Ruang</th>
                        <th>Waktu</th>
                        <th>Tanggal</th>
                        <th>Waktu Booking</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Response</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->user->user_id }}</td>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->class_schedule->room->building_number . "." . 
                               $booking->class_schedule->room->floor_number . "." .  
                               $booking->class_schedule->room->room_number }}
                        </td>
                        <td>{{ 
                                str_pad($booking
                                        ->class_schedule
                                        ->class_session
                                        ->start_hour, 2, '0', STR_PAD_LEFT)  . ":" . 
                                str_pad($booking
                                        ->class_schedule
                                        ->class_session
                                        ->start_minutes, 2, '0', STR_PAD_LEFT) . "-" . 
                                str_pad($booking
                                        ->class_schedule
                                        ->class_session
                                        ->end_hour, 2, '0', STR_PAD_LEFT) . ":" . 
                                str_pad($booking
                                        ->class_schedule
                                        ->class_session
                                        ->end_minutes, 2, '0', STR_PAD_LEFT) 
                            }}
                        </td>
                        <td>{{ $booking->date }}</td>
                        <td>{{ $booking->created_at }}</td>
                        <td>{{ $booking->title }}</td>
                        <td>
                            @if ($booking->status == "Accepted")
                            <b class="text-success">
                            @elseif ($booking->status == "Pending")
                            <b class="text-warning">
                            @else
                            <b class="text-danger">
                            @endif
                                {{  
                                    $booking->status
                                }}
                            </b>
                        </td>
                        <td>
                            <form method="POST" action="{{ url('/admin/booking/' . $booking->id) }}">
                                @csrf
                                <button class="btn btn-success" type="submit" value="accept" name="action">Accept</button>
                                <button class="btn btn-danger" type="submit" value="reject" name="action">Reject</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
{{-- 
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> --}}
        </div>
    </div>
</div>
@endsection
