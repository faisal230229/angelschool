<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    public function classTeacher()
    {
        return $this->belongsTo(User::class, 'class_teacher');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }

    public function attendence()
    {
        return $this->hasMany(StudentAttendence::class, 'class_id');
    }
}
