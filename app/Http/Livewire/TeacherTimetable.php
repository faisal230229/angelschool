<?php

namespace App\Http\Livewire;

use App\Models\SchoolClass;
use App\Models\Timetable;
use Livewire\Component;

class TeacherTimetable extends Component
{
    public function render()
    {
        $timetable = null;
        $dayRecord = [];
        $monday = Timetable::where('subject_teacher', auth()->user()->id)->where('day', 'MONDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
        array_push($dayRecord, $monday->toArray());
        $tuesday = Timetable::where('subject_teacher', auth()->user()->id)->where('day', 'TUESDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
        array_push($dayRecord, $tuesday->toArray());
        $wednesday = Timetable::where('subject_teacher', auth()->user()->id)->where('day', 'WEDNESDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
        array_push($dayRecord, $wednesday->toArray());
        $thursday = Timetable::where('subject_teacher', auth()->user()->id)->where('day', 'THURSDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
        array_push($dayRecord, $thursday->toArray());
        $friday = Timetable::where('subject_teacher', auth()->user()->id)->where('day', 'FRIDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
        array_push($dayRecord, $friday->toArray());
        $saturday = Timetable::where('subject_teacher', auth()->user()->id)->where('day', 'SATURDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
        array_push($dayRecord, $saturday->toArray());
        // dd($dayRecord[0][0]);
        $classes = SchoolClass::all();
        return view('livewire.teacher-timetable', compact('classes', 'dayRecord'));
    }
}
