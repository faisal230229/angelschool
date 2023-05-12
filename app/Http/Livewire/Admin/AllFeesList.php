<?php

namespace App\Http\Livewire\Admin;

use App\Models\StudentFee;
use Livewire\Component;

class AllFeesList extends Component
{
    public $search;
    public $receive;
    public $filter = 'unpaid';

    public function payFee($id)
    {
        $fee = StudentFee::find($id);
        $fee->received = $this->receive[$id];
        $fee->arrears = $fee->total - $this->receive[$id];
        $fee->status = 'paid';
        $fee->save();

        $this->dispatchBrowserEvent('timeAlert', [
            'type' => 'success',
            'message' => 'Fees Status Updated Successfully!',
        ]);
    }

    public function render()
    {
        $all = StudentFee::all();
        $paid = StudentFee::where('status', 'paid')->get();
        $unpaid = StudentFee::where('status', 'unpaid')->get();
        $fees = StudentFee::select('student_fees.*')
            ->join('students', 'students.id', '=', 'student_fees.student_id')
            ->when(trim($this->search), function ($q) {
                $search = '%' . trim($this->search) . '%';
                return $q->where(function ($q) use ($search) {
                    return $q->where('students.id', 'like', $search)->orwhere('students.name', 'like', $search);
                });
            })
            ->where('status', $this->filter)
            ->paginate(10);
        return view('livewire.admin.all-fees-list', compact('fees', 'all', 'unpaid', 'paid'));
    }
}
