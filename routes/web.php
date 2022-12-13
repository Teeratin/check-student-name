<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ChecknameController;
use App\Http\Controllers\Manage\CourseController;
use App\Http\Controllers\Manage\LecturerController;
use App\Http\Controllers\Manage\ScoringController;
use App\Http\Controllers\Manage\SectionController;
use App\Http\Controllers\Manage\SubjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Timetable\EveningController;
use App\Http\Controllers\Timetable\NormalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('login');
})->name('login');

//  MenuController
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu_section', [MenuController::class, 'menu_section'])->name('menu_section');
Route::prefix('profile')->name('profile_')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index');
});
Route::prefix('checkname')->name('checkname_')->group(function () {
    Route::get('/', [ChecknameController::class, 'index'])->name('index');
});
Route::prefix('timetable')->name('timetable_')->group(function () {
    Route::prefix('normal')->name('normal_')->group(function () {
        Route::get('/', [NormalController::class, 'index'])->name('index');
    });
    Route::prefix('evening')->name('evening_')->group(function () {
        Route::get('/', [EveningController::class, 'index'])->name('index');
    });
});
Route::prefix('manage')->name('manage_')->group(function () {
    Route::prefix('subject')->name('subject_')->group(function () {
        Route::get('/', [SubjectController::class, 'index'])->name('index');
        Route::get('/edit', [SubjectController::class, 'edit'])->name('edit');
    });
    Route::prefix('course')->name('course_')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
    });
    Route::prefix('lecturer')->name('lecturer_')->group(function () {
        Route::get('/', [LecturerController::class, 'index'])->name('index');
    });
    Route::prefix('scoring')->name('scoring_')->group(function () {
        Route::get('/', [ScoringController::class, 'index'])->name('index');
    });
    Route::prefix('section')->name('section_')->group(function () {
        Route::get('/', [SectionController::class, 'index'])->name('index');
        Route::get('/edit', [SectionController::class, 'edit'])->name('edit');
    });
});


//  End MenuController

//  ChecknameController

//  End ChecknameController
