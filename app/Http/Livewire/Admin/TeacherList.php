<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TeacherList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public string $search = '';
    public $teacher_id;

    public function setTeacher($id)
    {
        $this->teacher_id = $id;
    }

    public function deleteTeacher()
    {
        $teacher = User::where('id', $this->teacher_id)->first();
        unlink(public_path($teacher->image));
        $teacher->delete();

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Teacher Deleted Successfully!',
        ]);
    }

    public function render()
    {
        $teachers = User::select('users.*')
            ->when(trim($this->search), function ($q) {
                $search = '%' . trim($this->search) . '%';
                return $q->where(function ($q) use ($search) {
                    return $q->where('users.email', 'like', $search)->orwhere('users.name', 'like', $search)->orwhere('users.phone', 'like', $search);
                });
            })
            ->where('type', 'teacher')
            ->paginate(10);
        return view('livewire.admin.teacher-list', compact('teachers'));
    }
}
