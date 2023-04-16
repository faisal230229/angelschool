<?php

use App\Http\Livewire\Admin\AddClass;
use App\Http\Livewire\Admin\AddStudent;
use App\Http\Livewire\Admin\AddTeacher;
use App\Http\Livewire\Admin\AdminStudentProfile;
use App\Http\Livewire\Admin\AdminTeacherProfile;
use App\Http\Livewire\Admin\ClassEdit;
use App\Http\Livewire\Admin\ClassesList;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\StudentEdit;
use App\Http\Livewire\Admin\StudentList;
use App\Http\Livewire\Admin\TeacherEdit;
use App\Http\Livewire\Admin\TeacherList;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/', Dashboard::class)->name('admin.dashboard');

    Route::get('/teacherlist', TeacherList::class)->name('admin.teacherList');
    Route::get('/addteacher', AddTeacher::class)->name('admin.addTeacher');
    Route::get('/teacherprofile/{id}', AdminTeacherProfile::class)->name('admin.teacherProfile');
    Route::get('/editteacher/{id}', TeacherEdit::class)->name('admin.editTeacher');

    Route::get('/studentlist', StudentList::class)->name('admin.studentList');
    Route::get('/addstudent', AddStudent::class)->name('admin.addStudent');
    Route::get('/studentprofile/{id}', AdminStudentProfile::class)->name('admin.studentProfile');
    Route::get('/editstudent/{id}', StudentEdit::class)->name('admin.editStudent');

    Route::get('/classeslist', ClassesList::class)->name('admin.classesList');
    Route::get('/addclass', AddClass::class)->name('admin.addClass');
    Route::get('/editclass/{id}', ClassEdit::class)->name('admin.editClass');
});
