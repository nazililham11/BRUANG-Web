<?php

use Illuminate\Database\Seeder;

class CourseSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `course_schedules`
     	(`id`, `user_id`, `course_id`, `class_schedule_id`, `created_at`, `updated_at`) VALUES
        (1,	7,	2,	8,	'2019-12-28 13:25:30', null),
		(2,	8,	5,	2,	'2019-12-28 13:25:30', null),
		(3,	10,	4,	1,	'2019-12-28 13:25:30', null),
		(4,	13,	2,	4,	'2019-12-28 13:25:30', null),
		(5,	15,	12,	17,	'2019-12-28 13:25:30', null),
		(6,	7,	6,	5,	'2019-12-28 13:25:30', null),
		(7,	8,	10,	10,	'2019-12-28 13:25:30', null),
		(8,	10,	11,	12,	'2019-12-28 13:25:30', null),
		(9,	13,	9,	15,	'2019-12-28 13:25:30', null);
		");
    }
}
