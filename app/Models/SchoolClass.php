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
}
