<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use Livewire\Component;

class AllClassesAttendence extends Component
{
    public function render()
    {
        $classes = SchoolClass::all();
        return view('livewire.admin.all-classes-attendence', compact('classes'));
    }
}
