<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\Timetable;
use App\Models\User;
use Livewire\Component;

class AddTimetable extends Component
{
    public $class_id;
    public $subject_teacher;
    public $subject_name;
    public $day;
    public $start_time;
    public $end_time;

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

    public function addTimetable()
    {
        $this->validate();

        $timetable = new Timetable();
        $timetable->class_id = $this->class_id;
        $timetable->subject_teacher = $this->subject_teacher;
        $timetable->subject_name = $this->subject_name;
        $timetable->day = $this->day;
        $timetable->start_time = $this->start_time;
        $timetable->end_time = $this->end_time;
        $timetable->save();

        return redirect()->route('admin.timetable')->with('msg', 'Timetable Record Added Successfully');
    }


    public function render()
    {
        $classes = SchoolClass::all();
        $teachers = User::where('type', 'teacher')->get();
        return view('livewire.admin.add-timetable', compact('classes', 'teachers'));
    }
}
