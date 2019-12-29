<?php

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::insert("INSERT INTO `bookings` 
            (`lecturer_id`, `room_id`, `time_session_id`, `date`, `title`, `status`, `message`, `created_at`, `updated_at`) VALUES
            ('190302126',	1,	2, '2020-11-25', 'Kelas Pengganti Kecerdasan Buatan IF 13',	    'Accepted', '', '2019-12-28 13:25:30', null),
            ('190302126',	1,	4, '2020-11-25', 'Kelas Pengganti Metodologi Penelitian IF 13',	'Denied', '', '2019-12-28 13:25:30', null),
            ('190302126',	1,	2, '2020-11-25', 'Kelas Pengganti Mobile Pemrog IF 13',     	'Pending', '', '2019-12-28 13:25:30', null)
            ;");
    }
}
