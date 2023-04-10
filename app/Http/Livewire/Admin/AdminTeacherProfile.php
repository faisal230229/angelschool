<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminTeacherProfile extends Component
{
    public $teacher_id;

    public function mount($id)
    {
        $this->teacher_id = $id;
    }

    public function render()
    {
        $teacher = User::find($this->teacher_id);
        return view('livewire.admin.admin-teacher-profile', compact('teacher'));
    }
}
