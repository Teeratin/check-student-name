<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ChecknameController;

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
Route::prefix('timetable')->name('timetable_')->group(function () {
    Route::get('/normal', [MenuController::class, 'timetable_normal'])->name('normal');
    Route::get('/evening', [MenuController::class, 'timetable_evening'])->name('evening');
});
Route::get('/profile', [MenuController::class, 'profile'])->name('profile');
Route::prefix('manage')->name('manage_')->group(function () {
    Route::get('/course', [MenuController::class, 'manage_course'])->name('course');
    Route::get('/lecturer', [MenuController::class, 'manage_lecturer'])->name('lecturer');
    Route::get('/scoring', [MenuController::class, 'manage_scoring'])->name('scoring');
    Route::get('/section', [MenuController::class, 'manage_section'])->name('section');
    Route::get('/subject', [MenuController::class, 'manage_subject'])->name('subject');
});

//  End MenuController

//  ChecknameController
Route::get('/checkname', [ChecknameController::class, 'index'])->name('checkname');
//  End ChecknameController
