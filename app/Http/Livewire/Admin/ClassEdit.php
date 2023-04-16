<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\User;
use Livewire\Component;

class ClassEdit extends Component
{
    public $class_id;
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

    public function mount($id)
    {
        $this->class_id = $id;
        $class = SchoolClass::find($id);
        $this->name = $class->name;
        $this->class_teacher = $class->class_teacher;
    }

    public function clear()
    {
        $this->name = '';
        $this->class_teacher = null;
    }

    public function editClass()
    {
        $this->validate();

        $class = SchoolClass::find($this->class_id);
        $class->name = $this->name;
        $class->class_teacher = $this->class_teacher;
        $class->save();

        return redirect()->route('admin.classList')->with('msg', 'Class Updated Successfully');
    }

    public function render()
    {
        $class = SchoolClass::find($this->class_id);
        $teachers = User::where('type', 'teacher')->get();
        return view('livewire.admin.class-edit', compact('class', 'teachers'));
    }
}
