<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolClass;
use Livewire\Component;
use Livewire\WithPagination;

class ClassesList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public string $search = '';
    public $class_id;

    public function setClass($id)
    {
        $this->class_id = $id;
    }

    public function deleteClass()
    {
        $class = SchoolClass::find($this->class_id);
        $class->delete();

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Class Deleted Successfully!',
        ]);
    }

    public function render()
    {
        $classes = SchoolClass::select('school_classes.*')
            ->when(trim($this->search), function ($q) {
                $search = '%' . trim($this->search) . '%';
                return $q->where(function ($q) use ($search) {
                    return $q->where('school_classes.id', 'like', $search)->orwhere('school_classes.name', 'like', $search);
                });
            })
            ->paginate(10);
        return view('livewire.admin.classes-list', compact('classes'));
    }
}
