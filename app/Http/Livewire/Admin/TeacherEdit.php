<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeacherEdit extends Component
{
    use WithFileUploads;
    public $teacher_id;

    public $name;
    public $email;
    public $cnic;
    public $image;
    public $dob;
    public $phone;
    public $qualification;
    public $address;
    public $nationality = 'Pakistani';
    public $religion = 'Islam';
    public $newImage;

    public function mount($id)
    {
        $this->teacher_id = $id;
        $teacher = User::find($id);
        $this->name = $teacher->name;
        $this->email = $teacher->email;
        $this->cnic = $teacher->cnic;
        $this->image = $teacher->image;
        $this->dob = $teacher->dob;
        $this->phone = $teacher->phone;
        $this->qualification = $teacher->qualification;
        $this->address = $teacher->address;
        $this->nationality = $teacher->nationality;
        $this->religion = $teacher->religion;
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->teacher_id,
            'cnic' => 'required|numeric|digits:13',
            'dob' => 'required',
            'phone' => 'required|numeric|digits:11',
            'qualification' => 'required',
            'address' => 'required',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function clear()
    {
        $this->name = '';
        $this->email = '';
        $this->dob = '';
        $this->cnic = '';
        $this->image = '';
        $this->phone = '';
        $this->qualification = '';
        $this->address = '';
        $this->nationality = 'Pakistani';
        $this->religion = 'Islam';
    }

    public function editTeacher()
    {
        $this->validate();
        // dd("hello");

        $teacher = User::find($this->teacher_id);
        $teacher->name = $this->name;
        $teacher->email = $this->email;
        $teacher->cnic = $this->cnic;

        if ($this->newImage) {
            unlink(public_path($this->image));
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('assets/uploads/teachers', $imageName);
            $teacher->image = '/assets/uploads/teachers/' . $imageName;
        }

        $teacher->dob = $this->dob;
        $teacher->phone = $this->phone;
        $teacher->qualification = $this->qualification;
        $teacher->address = $this->address;
        $teacher->nationality = $this->nationality;
        $teacher->religion = $this->religion;
        $teacher->save();

        return redirect()->route('admin.teacherList')->with('msg', 'Teacher Updated Successfully');
    }

    public function render()
    {
        $teacher = User::find($this->teacher_id);
        return view('livewire.admin.teacher-edit', compact('teacher'));
    }
}
