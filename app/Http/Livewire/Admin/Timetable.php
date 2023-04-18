<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\Timetable as ModelsTimetable;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Timetable extends Component
{
    public $search = '';
    public $timetable_id;

    public function showToast($msg)
    {
        $this->dispatchBrowserEvent('timeAlert', [
            'type' => 'success',
            'message' => $msg,
        ]);
    }

    public function setTimetable($id)
    {
        $this->timetable_id = $id;
    }

    public function deleteTimetable()
    {
        $timetable = ModelsTimetable::find($this->timetable_id);
        $timetable->delete();

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Timetable Record Deleted Successfully!',
        ]);
    }

    public function render()
    {
        $timetable = null;
        $dayRecord = [];
        if ($this->search) {
            $monday = ModelsTimetable::where('class_id', $this->search)->where('day', 'MONDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
            array_push($dayRecord, $monday->toArray());
            $tuesday = ModelsTimetable::where('class_id', $this->search)->where('day', 'TUESDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
            array_push($dayRecord, $tuesday->toArray());
            $wednesday = ModelsTimetable::where('class_id', $this->search)->where('day', 'WEDNESDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
            array_push($dayRecord, $wednesday->toArray());
            $thursday = ModelsTimetable::where('class_id', $this->search)->where('day', 'THURSDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
            array_push($dayRecord, $thursday->toArray());
            $friday = ModelsTimetable::where('class_id', $this->search)->where('day', 'FRIDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
            array_push($dayRecord, $friday->toArray());
            $saturday = ModelsTimetable::where('class_id', $this->search)->where('day', 'SATURDAY')->orderBy('start_time', 'ASC')->with('teacher')->get();
            array_push($dayRecord, $saturday->toArray());
            // dd($dayRecord[0][0]);
        }
        $classes = SchoolClass::all();
        return view('livewire.admin.timetable', compact('classes', 'dayRecord'));
    }
}
