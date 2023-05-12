<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\StudentFee;
use Livewire\Component;

class GenerateFee extends Component
{
    public $class_id;
    public $student_id;
    public $arrears;
    public $admission_fee;
    public $tution_fee;
    public $stationary_fee;
    public $paper_fund;
    public $others;
    public $month = 1;

    protected $rules = [
        'student_id' => 'sometimes|nullable|exists:students,id',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function generateFee()
    {
        $this->validate();

        $total = $this->arrears + $this->admission_fee + $this->tution_fee + $this->stationary_fee + $this->paper_fund + $this->others;
        if ($this->student_id) {
            $fee = new StudentFee();
            $fee->student_id = $this->student_id;
            $fee->month = $this->month;
            $fee->prev_arrears = $this->arrears;
            $fee->admission_fee = $this->admission_fee;
            $fee->tution_fee = $this->tution_fee;
            $fee->stationary_fee = $this->stationary_fee;
            $fee->paper_fund = $this->paper_fund;
            $fee->others = $this->others;
            $fee->total = $total;
            $fee->save();
        } else if ($this->class_id) {
            $students = Student::where('class_id', $this->class_id)->get();
            foreach ($students as $student) {
                $fee = new StudentFee();
                $fee->student_id = $student->id;
                $fee->month = $this->month;
                $fee->prev_arrears = $this->arrears;
                $fee->admission_fee = $this->admission_fee;
                $fee->tution_fee = $this->tution_fee;
                $fee->stationary_fee = $this->stationary_fee;
                $fee->paper_fund = $this->paper_fund;
                $fee->others = $this->others;
                $fee->total = $total;
                $fee->save();
            }
        }

        return redirect()->route('admin.feesList')->with('msg', 'Fees Generated Successfully');
    }

    public function render()
    {
        $classes = SchoolClass::all();
        return view('livewire.admin.generate-fee', compact('classes'));
    }
}
