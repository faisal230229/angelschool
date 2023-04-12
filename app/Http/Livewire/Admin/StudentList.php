<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithPagination;
    public function render()
    {
        $students = Student::paginate(10);
        return view('livewire.admin.student-list', compact('students'));
    }
}
