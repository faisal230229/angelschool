<?php

namespace App\Http\Livewire\Admin;

use App\Models\StudentFee;
use Livewire\Component;

class AllFeesList extends Component
{
    public function render()
    {
        $fees = StudentFee::get();
        return view('livewire.admin.all-fees-list', compact('fees'));
    }
}
