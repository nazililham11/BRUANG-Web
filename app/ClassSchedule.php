<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSchedule extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function class_session()
    {
        return $this->belongsTo(ClassSession::class);
    }
}
