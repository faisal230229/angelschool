<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    public function totalAbsents()
    {
        return $this->hasMany(StudentAttendence::class, 'student_id')->where('status', 'ABSENT');
    }
}
