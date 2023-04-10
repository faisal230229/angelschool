<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTeacher extends Component
{
    use WithFileUploads;

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
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'cnic' => 'required',
        'image' => 'required',
        'dob' => 'required',
        'phone' => 'required',
        'qualification' => 'required',
        'address' => 'required',
        'password' => ['required'],
        'password_confirmation' => ['required'],
    ];

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
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function addTeacher()
    {
        $this->validate();
        // dd("hello");

        $teacher = new User();
        $teacher->name = $this->name;
        $teacher->email = $this->email;
        $teacher->cnic = $this->cnic;

        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('assets/uploads/teachers', $imageName);
        $teacher->image = '/assets/uploads/teachers/' . $imageName;

        $teacher->dob = $this->dob;
        $teacher->phone = $this->phone;
        $teacher->qualification = $this->qualification;
        $teacher->address = $this->address;
        $teacher->nationality = $this->nationality;
        $teacher->religion = $this->religion;
        $teacher->password = Hash::make($this->password);
        $teacher->save();

        return redirect()->route('admin.teacherList')->with('msg', 'Teacher Added Successfully');
    }


    public function render()
    {
        return view('livewire.admin.add-teacher');
    }
}
