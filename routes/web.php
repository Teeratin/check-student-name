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
Route::get('/menu_section', [MenuController::class, 'menu2'])->name('menu2');
Route::get('/timetable1', [MenuController::class, 'timetable1'])->name('timetable1');
Route::get('/timetable2', [MenuController::class, 'timetable2'])->name('timetable2');
Route::get('/profile', [MenuController::class, 'profile'])->name('profile');
Route::get('/manage_course', [MenuController::class, 'manage_course'])->name('manage_course');
Route::get('/manage_lecturer', [MenuController::class, 'manage_lecturer'])->name('manage_lecturer');
Route::get('/manage_scoring', [MenuController::class, 'manage_scoring'])->name('manage_scoring');
Route::get('/manage_section', [MenuController::class, 'manage_section'])->name('manage_section');
Route::get('/manage_subject', [MenuController::class, 'manage_subject'])->name('manage_subject');
//  End MenuController

//  ChecknameController
Route::get('/checkname', [ChecknameController::class, 'index'])->name('checkname');
//  End ChecknameController
