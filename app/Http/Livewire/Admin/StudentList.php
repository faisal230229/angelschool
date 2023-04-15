<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public string $search = '';
    public $student_id;

    public function showToast($msg)
    {
        $this->dispatchBrowserEvent('timeAlert', [
            'type' => 'success',
            'message' => $msg,
        ]);
    }

    public function setStudent($id)
    {
        $this->student_id = $id;
    }

    public function deleteStudent()
    {
        $student = Student::where('id', $this->student_id)->first();
        unlink(public_path($student->image));
        $student->delete();

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Student Deleted Successfully!',
        ]);
    }

    public function render()
    {
        $students = Student::select('students.*')
            ->when(trim($this->search), function ($q) {
                $search = '%' . trim($this->search) . '%';
                return $q->where(function ($q) use ($search) {
                    return $q->where('students.email', 'like', $search)->orwhere('students.name', 'like', $search)->orwhere('students.phone', 'like', $search);
                });
            })
            ->paginate(10);
        return view('livewire.admin.student-list', compact('students'));
    }
}
