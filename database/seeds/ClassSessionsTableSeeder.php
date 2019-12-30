<?php

use Illuminate\Database\Seeder;

class ClassSessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `class_sessions`
     	(`id`, `start_hour`, `start_minutes`, `end_hour`, `end_minutes`, `created_at`, `updated_at`) VALUES
        (1,	7,	0,	8,	40,	'2019-12-28 13:25:30', null),
		(2,	8,	50,	10,	30,	'2019-12-28 13:25:30', null),
		(3,	10,	40,	12,	10,	'2019-12-28 13:25:30', null),
		(4,	13,	20,	15,	0,	'2019-12-28 13:25:30', null),
        (5, 15, 30, 17, 10, '2019-12-28 13:25:30', null),
		(6,	12,	30,	14,	10,	'2019-12-28 13:25:30', null);
		");

    }
}
