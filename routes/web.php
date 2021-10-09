<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home');
});

Route::get('/workout/overview', function () {
    return view('workouts.workout');
});

Route::get('/workout/add', function () {
    return view('workouts.workoutadd');
});

Route::get('/workout/day/add', function () {
    return view('workouts.workoutaddday');
});

Route::get('/workout/schedule/overview', function () {
    return view('workoutsschedule.schedule');
});

Route::get('/workout/gallery/overview', function () {
    return view('gallery.gallery');
});

Route::get('/gallery/add', function () {
    return view('gallery.galleryadd');
});

Route::get('/weight/add', function () {
    return view('weight.weightadd');
});

Route::get('/nutrition/overview', function () {
    return view('nutrition.nutrition');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
