<?php

use App\Http\Controllers\TeacherController;
use App\Http\Livewire\Attendences;
use App\Http\Livewire\ClassAttendence;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\TeacherProfile;
use App\Http\Livewire\TeacherTimetable;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth', 'user-access:teacher'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/attendences', Attendences::class)->name('attendences');
    Route::get('/classattendence/{id}', ClassAttendence::class)->name('classAttendence');
    Route::get('/profile', TeacherProfile::class)->name('profile');
    Route::get('/timetable', TeacherTimetable::class)->name('teacherTimetable');
});

require __DIR__ . '/auth.php';
