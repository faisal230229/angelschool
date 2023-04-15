<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;

class AdminStudentProfile extends Component
{
    public $student_id;

    public function mount($id)
    {
        $this->student_id = $id;
    }

    public function render()
    {
        $student = Student::find($this->student_id);
        return view('livewire.admin.admin-student-profile', compact('student'));
    }
}
