<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\Timetable;
use App\Models\User;
use Livewire\Component;

class TimetableEdit extends Component
{
    public $timetable_id;
    public $class_id;
    public $subject_teacher;
    public $subject_name;
    public $day;
    public $start_time;
    public $end_time;

    public function mount($id)
    {
        $this->timetable_id = $id;
        $timetable = Timetable::find($id);
        $this->class_id = $timetable->class_id;
        $this->subject_teacher = $timetable->subject_teacher;
        $this->day = $timetable->day;
        $this->start_time = $timetable->start_time;
        $this->end_time = $timetable->end_time;
        $this->subject_name = $timetable->subject_Name;
    }

    protected $rules = [
        'class_id' => 'required',
        'subject_name' => 'required',
        'day' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function clear()
    {
        $this->class_id = '';
        $this->subject_teacher = '';
        $this->subject_name = '';
        $this->day = '';
        $this->start_time = '';
        $this->end_time = '';
    }

    public function editTimetable()
    {
        $this->validate();

        $timetable = Timetable::find($this->timetable_id);
        $timetable->class_id = $this->class_id;
        $timetable->subject_teacher = $this->subject_teacher;
        $timetable->subject_name = $this->subject_name;
        $timetable->day = $this->day;
        $timetable->start_time = $this->start_time;
        $timetable->end_time = $this->end_time;
        $timetable->save();

        return redirect()->route('admin.timetable')->with('msg', 'Timetable Record Updated Successfully');
    }

    public function render()
    {
        $classes = SchoolClass::all();
        $teachers = User::where('type', 'teacher')->get();
        return view('livewire.admin.timetable-edit', compact('classes', 'teachers'));
    }
}
