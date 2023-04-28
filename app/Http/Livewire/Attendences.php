<?php

namespace App\Http\Livewire;

use App\Models\SchoolClass;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Attendences extends Component
{
    public function showToast($msg)
    {
        $this->dispatchBrowserEvent('timeAlert', [
            'type' => 'success',
            'message' => $msg,
        ]);
    }

    public function render()
    {
        $classes = SchoolClass::where('class_teacher', Auth::user()->id)->get();
        return view('livewire.attendences', compact('classes'));
    }
}
