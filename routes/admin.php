<?php

use App\Http\Controllers\PdfController;
use App\Http\Livewire\Admin\AddClass;
use App\Http\Livewire\Admin\AddStudent;
use App\Http\Livewire\Admin\AddTeacher;
use App\Http\Livewire\Admin\AddTimetable;
use App\Http\Livewire\Admin\AdminStudentProfile;
use App\Http\Livewire\Admin\AdminTeacherProfile;
use App\Http\Livewire\Admin\AllClassesAttendence;
use App\Http\Livewire\Admin\AllFeesList;
use App\Http\Livewire\Admin\ClassEdit;
use App\Http\Livewire\Admin\ClassesList;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\GenerateFee;
use App\Http\Livewire\Admin\StudentEdit;
use App\Http\Livewire\Admin\StudentList;
use App\Http\Livewire\Admin\TeacherEdit;
use App\Http\Livewire\Admin\TeacherList;
use App\Http\Livewire\Admin\Timetable;
use App\Http\Livewire\Admin\TimetableEdit;
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

    Route::get('/timetable', Timetable::class)->name('admin.timetable');
    Route::get('/addtimetable', AddTimetable::class)->name('admin.addTimetable');
    Route::get('/edittimetable/{id}', TimetableEdit::class)->name('admin.editTimetable');

    Route::get('/allclassesattendence', AllClassesAttendence::class)->name('admin.allClassesAttendence');

    Route::get('/feeslist', AllFeesList::class)->name('admin.feesList');
    Route::get('/generateFee', GenerateFee::class)->name('admin.generateFee');
    Route::get('/editgenerateFee/{id}', TimetableEdit::class)->name('admin.editGenerateFee');

    Route::get('/studentPdf', [PdfController::class, 'studentPdf'])->name('admin.studentPdf');
    Route::get('/teacherPdf', [PdfController::class, 'teacherPdf'])->name('admin.teacherPdf');
    Route::get('/classesPdf', [PdfController::class, 'classesPdf'])->name('admin.classesPdf');
    Route::get('/teacherCardPdf/{id}', [PdfController::class, 'teacherCardPdf'])->name('admin.teacherCardPdf');
});
