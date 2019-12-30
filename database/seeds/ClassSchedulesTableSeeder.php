<?php

use App\Room;
use App\ClassSession;
use Illuminate\Database\Seeder;

class ClassSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$values = "";

    	$room_count = Room::count();

    	for ($days=1; $days <= 6; $days++) { 
    		
    		for ($room_id=1; $room_id <= $room_count; $room_id++) { 
    			
    			for ($class_session_id=1; $class_session_id <= 5; $class_session_id++) { 

    				if ($days == 5 && $class_session_id == 3)
    					continue;

    				if ($days == 6 && $class_session_id == 4){
    					$separator = ($days == 6 && $room_id == $room_count && $class_session_id == 4) ? "" : ",";
					
						$values = $values . "($room_id,	6,	$days, '2019-12-28 13:25:30', null)$separator";

    					continue;
    				}

    				if ($days == 6 && $class_session_id == 5)
    					continue;
    				

    				$separator = ($days == 6 && $room_id == $room_count && $class_session_id == 4) ? "" : ",";
					
					$values = $values . "($room_id,	$class_session_id,	$days, '2019-12-28 13:25:30', null)$separator";


    			}
    		}
    	}

    	DB::insert("INSERT INTO `class_schedules`(`room_id`, `class_session_id`, `day`, `created_at`, `updated_at`) VALUES $values;");
    }
}
