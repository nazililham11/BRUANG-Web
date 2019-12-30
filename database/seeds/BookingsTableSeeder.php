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
        (`user_id`, `course_id`, `class_schedule_id`, `date`, `day`, `title`, `status`, `message`, `created_at`, `updated_at`) VALUES
        (1,	2, 3, '2020-11-25', '2', 'Kelas Pengganti Kecerdasan Buatan IF 13',	    'Accepted', '', '2019-12-28 13:25:30', null),
        (5,	4, 6, '2020-11-25', '3', 'Kelas Pengganti Metodologi Penelitian IF 13',	'Denied', '', '2019-12-28 13:25:30', null),
        (8,	6, 9, '2020-11-25', '5', 'Kelas Pengganti Mobile Pemrog IF 13',     	'Pending', '', '2019-12-28 13:25:30', null)
        ;");
    }
}
