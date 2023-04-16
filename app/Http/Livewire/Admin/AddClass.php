<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\User;
use Livewire\Component;

class AddClass extends Component
{
    public $name;
    public $class_teacher;

    protected $rules = [
        'name' => 'required',
        // 'class_teacher' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function clear()
    {
        $this->name = '';
        $this->class_teacher = '';
    }

    public function addClass()
    {
        $this->validate();

        $class = new SchoolClass();
        $class->name = $this->name;
        $class->class_teacher = $this->class_teacher;
        $class->save();

        return redirect()->route('admin.classesList')->with('msg', 'Class Added Successfully');
    }

    public function render()
    {
        $teachers = User::where('type', 'teacher')->get();
        return view('livewire.admin.add-class', compact('teachers'));
    }
}
