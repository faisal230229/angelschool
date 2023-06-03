<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $t_students = Student::all()->count();
        $t_teachers = User::where('type', 'teacher')->get()->count();
        $t_classes = SchoolClass::all()->count();
        $students = Student::select('name', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        // dd(isset($students["02"]) ? $students["02"]->count() : 0);
        // $count = [];
        // for ($i = 1; $i <= 10; $i + 1) {
        //     array_push($count, isset($students["0" . $i]) ? $students["0" . $i]->count() : 0);
        // }
        // // $students = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
        // dd($count);
        return view('livewire.admin.dashboard', compact('t_students', 't_teachers', 't_classes'));
    }
}
