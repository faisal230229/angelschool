<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminTeacherProfile extends Component
{
    public $teacher_id;
    public $password;
    public $confirmPassword;

    protected $rules = [
        'password' => 'required|min:8',
        'confirmPassword' => 'required|min:8|same:password|required_with:password',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function changePassword($id)
    {
        $this->validate();

        $teacher = User::find($id);
        $teacher->password = Hash::make($this->password);
        $teacher->save();

        return redirect()->route('admin.teacherList')->with('msg', 'Password Updated Successfully');
    }

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
