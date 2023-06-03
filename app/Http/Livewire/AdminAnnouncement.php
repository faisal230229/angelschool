<?php

namespace App\Http\Livewire;

use App\Models\SchoolClass;
use Livewire\Component;

class AdminAnnouncement extends Component
{
    public $message;
    public $teachers;
    public $students;
    public $class;

    public function render()
    {
        $classes = SchoolClass::all();
        return view('livewire.admin-announcement', compact('classes'));
    }
}
