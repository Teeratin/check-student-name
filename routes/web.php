<?php

use App\Http\Controllers\AuthController;
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
use App\Models\Section;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'subminLogin'])->name('submit_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//  MenuController
Route::middleware('auth')->group(function () {
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::get('/menu_section', [MenuController::class, 'menu_section'])->name('menu_section');
    Route::prefix('profile')->name('profile_')->group(function () {
        Route::get('/{id}', [ProfileController::class, 'index'])->name('index');
        Route::post('/{id}', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/edit_img/{id}', [ProfileController::class, 'edit_img'])->name('edit_img');
    });
    Route::prefix('checkname')->name('checkname_')->group(function () {
        Route::get('/{id}', [ChecknameController::class, 'index'])->name('index');
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
            Route::get('/add', [SubjectController::class, 'add'])->name('add');
            Route::post('/create', [SubjectController::class, 'create'])->name('create');
            Route::get('/edit/{id}', [SubjectController::class, 'edit'])->name('edit');
            Route::get('/delete/{id}', [SubjectController::class, 'delete'])->name('delete');
            Route::post('/update/{id}', [SubjectController::class, 'update'])->name('update');
        });
        Route::prefix('course')->name('course_')->group(function () {
            Route::get('/', [CourseController::class, 'index'])->name('index');
            Route::post('/create', [CourseController::class, 'create'])->name('create');
            Route::post('/update/{id}', [CourseController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [CourseController::class, 'delete'])->name('delete');
        });
        Route::prefix('lecturer')->name('lecturer_')->group(function () {
            Route::get('/', [LecturerController::class, 'index'])->name('index');
            Route::get('/add', [LecturerController::class, 'add'])->name('add');
            Route::post('/create', [LecturerController::class, 'create'])->name('create');
            Route::get('/edit/{id}', [LecturerController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [LecturerController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [LecturerController::class, 'delete'])->name('delete');
        });
        Route::prefix('scoring')->name('scoring_')->group(function () {
            Route::get('/', [ScoringController::class, 'index'])->name('index');
            Route::post('/create', [ScoringController::class, 'create'])->name('create');
            Route::post('/update/{id}', [ScoringController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ScoringController::class, 'delete'])->name('delete');
        });
        Route::prefix('section')->name('section_')->group(function () {
            Route::get('/', [SectionController::class, 'index'])->name('index');
            Route::post('/create', [SectionController::class, 'create'])->name('create');
            Route::get('/delete/{id}', [SectionController::class, 'delete'])->name('delete');
            Route::get('/edit/{id}', [SectionController::class, 'edit'])->name('edit');
            Route::post('/edit/create_student', [SectionController::class, 'create_student'])->name('create_student');
            Route::post('/update/{id}/{sid}', [SectionController::class, 'update'])->name('update');
            Route::get('/delete_student/{id}/{sid}', [SectionController::class, 'delete_student'])->name('delete_student');
            Route::post('/import/{id}', [SectionController::class, 'import_excel'])->name('import_excel');
        });
    });
});



//  End MenuController

//  ChecknameController

//  End ChecknameController
