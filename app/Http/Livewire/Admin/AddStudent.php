<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddStudent extends Component
{
    use WithFileUploads;

    public $name;
    public $email = null;
    public $cnic;
    public $image;
    public $dob;
    public $phone;
    public $father_name;
    public $mother_name;
    public $father_education;
    public $mother_education;
    public $father_cnic;
    public $father_phone;
    public $address;
    public $guardian_name;
    public $guardian_occupation;
    public $guardian_cnic;
    public $guardian_phone;
    public $guardian_address;
    public $nationality = 'Pakistani';
    public $religion = 'Islam';
    public $session;
    public $admission_class;
    public $last_school;

    protected $rules = [
        'name' => 'required',
        'email' => 'sometimes|nullable|email',
        'cnic' => 'required|numeric|digits:13',
        'image' => 'required',
        'dob' => 'required',
        'phone' => 'required|numeric|digits:11',
        'father_name' => 'required',
        'mother_name' => 'required',
        'father_cnic' => 'required|numeric|digits:13',
        'father_phone' => 'required|numeric|digits:11',
        'father_education' => 'required',
        'mother_education' => 'required',
        'address' => 'required',
        'guardian_name' => 'required',
        'guardian_occupation' => 'required',
        'guardian_cnic' => 'required|numeric|digits:13',
        'guardian_phone' => 'required|numeric|digits:11',
        'guardian_address' => 'required',
        'session' => 'required',
        'admission_class' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function clear()
    {
        $this->name = '';
        $this->email = '';
        $this->cnic = '';
        $this->dob = '';
        $this->phone = '';
        $this->image = '';
        $this->father_name = '';
        $this->mother_name = '';
        $this->father_education = '';
        $this->mother_education = '';
        $this->father_cnic = '';
        $this->father_phone = '';
        $this->address = '';
        $this->guardian_name = '';
        $this->guardian_occupation = '';
        $this->guardian_cnic = '';
        $this->guardian_phone = '';
        $this->guardian_address = '';
        $this->nationality = '';
        $this->religion = '';
        $this->session = '';
        $this->admission_class = '';
        $this->last_school = '';
    }

    public function addStudent()
    {
        $this->validate();
        // dd("hello");

        $student = new Student();
        $student->name = $this->name;
        $student->email = $this->email;
        $student->cnic = $this->cnic;

        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('assets/uploads/students', $imageName);
        $student->image = '/assets/uploads/students/' . $imageName;

        $student->dob = $this->dob;
        $student->phone = $this->phone;
        $student->father_name = $this->father_name;
        $student->mother_name = $this->mother_name;
        $student->father_education = $this->father_education;
        $student->mother_education = $this->mother_education;
        $student->father_cnic = $this->father_cnic;
        $student->father_phone = $this->father_phone;
        $student->address = $this->address;
        $student->guardian_name = $this->guardian_name;
        $student->guardian_occupation = $this->guardian_occupation;
        $student->guardian_cnic = $this->guardian_cnic;
        $student->guardian_phone = $this->guardian_phone;
        $student->guardian_address = $this->guardian_address;
        $student->nationality = $this->nationality;
        $student->religion = $this->religion;
        $student->session = $this->session;
        $student->class_id = $this->admission_class;
        $student->last_school = $this->last_school;
        $student->save();

        return redirect()->route('admin.studentList')->with('msg', 'Student Added Successfully');
    }


    public function render()
    {
        return view('livewire.admin.add-student');
    }
}
