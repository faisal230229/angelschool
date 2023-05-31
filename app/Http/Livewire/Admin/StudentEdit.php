<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\Student;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentEdit extends Component
{
    use WithFileUploads;
    public $student_id;

    public $name;
    public $email = null;
    public $cnic;
    public $image;
    public $newImage;
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

    public function mount($id)
    {
        $this->student_id = $id;
        $student = Student::find($id);
        $this->name = $student->name;
        $this->email = $student->email;
        $this->cnic = $student->cnic;
        $this->dob = $student->dob;
        $this->phone = $student->phone;
        $this->image = $student->image;
        $this->father_name = $student->father_name;
        $this->mother_name = $student->mother_name;
        $this->father_education = $student->father_education;
        $this->mother_education = $student->mother_education;
        $this->father_cnic = $student->father_cnic;
        $this->father_phone = $student->father_phone;
        $this->address = $student->address;
        $this->guardian_name = $student->guardian_name;
        $this->guardian_occupation = $student->guardian_occupation;
        $this->guardian_cnic = $student->guardian_cnic;
        $this->guardian_phone = $student->guardian_phone;
        $this->guardian_address = $student->guardian_address;
        $this->nationality = $student->nationality;
        $this->religion = $student->religion;
        $this->session = $student->session;
        $this->admission_class = $student->class_id;
        $this->last_school = $student->last_school;
    }

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
        $this->nationality = 'Pakistani';
        $this->religion = 'Islam';
        $this->session = '';
        $this->admission_class = '';
        $this->last_school = '';
    }

    public function editStudent()
    {
        $this->validate();
        // dd("hello");

        $student = Student::find($this->student_id);
        $student->name = $this->name;
        $student->email = $this->email;
        $student->cnic = $this->cnic;

        if ($this->newImage) {
            unlink(public_path($this->image));
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('assets/uploads/students', $imageName);
            $student->image = '/assets/uploads/students/' . $imageName;
        }
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

        return redirect()->route('admin.studentList')->with('msg', 'Student Updated Successfully');
    }

    public function render()
    {
        $classes = SchoolClass::all();
        return view('livewire.admin.student-edit', compact('classes'));
    }
}
