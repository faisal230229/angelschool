<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $t_students = Student::all()->count();
        $t_teachers = User::where('type', 'teacher')->get()->count();
        $t_classes = SchoolClass::all()->count();
        return view('livewire.admin.dashboard', compact('t_students', 't_teachers', 't_classes'));
    }
}
