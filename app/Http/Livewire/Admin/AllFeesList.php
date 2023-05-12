<?php

namespace App\Http\Livewire\Admin;

use App\Models\StudentFee;
use Livewire\Component;

class AllFeesList extends Component
{
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
        $fees = StudentFee::where('status', $this->filter)->get();
        return view('livewire.admin.all-fees-list', compact('fees'));
    }
}
