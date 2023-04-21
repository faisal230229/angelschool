<?php

namespace App\Http\Livewire;

use App\Models\Student;
use App\Models\StudentAttendence;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ClassAttendence extends Component
{
    use WithPagination;

    public $search = '';
    public $class_id;
    public $record = [];

    public function mount($id)
    {
        $this->class_id = $id;
    }

    public function setRecord($id, $status)
    {
        $this->record[$id] = $status;
    }

    public function submitRecord()
    {
        $attendences = [];
        foreach ($this->record as $id => $status) {
            array_push($attendences, ['student_id' => $id, 'class_id' => $this->class_id, 'teacher_id' => Auth::user()->id, 'status' => $status, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
        StudentAttendence::insert($attendences);
        // DB::table('student_attendences')->insert($attendences);
        dd('hello');
    }

    public function render()
    {
        $students = Student::select('students.*')
            ->when(trim($this->search), function ($q) {
                $search = '%' . trim($this->search) . '%';
                return $q->where(function ($q) use ($search) {
                    return $q->where('students.name', 'like', $search)->orwhere('students.father_name', 'like', $search)->orwhere('students.id', 'like', $search);
                });
            })
            ->where('class_id', $this->class_id)
            ->paginate(10);

        return view('livewire.class-attendence', compact('students'));
    }
}
