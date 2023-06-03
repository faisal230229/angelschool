<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class TeacherProfile extends Component
{
    public $currentPassword;
    public $password;
    public $confirmPassword;

    protected function rules()
    {
        return [
            'currentPassword' => ['required', new MatchOldPassword],
            'password' => 'required|min:8',
            'confirmPassword' => 'required|min:8|same:password|required_with:password',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function showToast($msg)
    {
        $this->dispatchBrowserEvent('timeAlert', [
            'type' => 'success',
            'message' => $msg,
        ]);
    }

    public function changePassword($id)
    {
        $this->validate();

        $teacher = User::find($id);
        $teacher->password = Hash::make($this->password);
        $teacher->save();

        return redirect()->route('profile')->with('msg', 'Password Updated Successfully');
    }

    public function render()
    {
        // dd(auth()->user()->getAuthPassword());
        return view('livewire.teacher-profile');
    }
}
