<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSchedule extends Model
{
    public function class_schedule()
    {
        return $this->belongsTo(ClassSchedule::class);
    }
}
