<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[ProjectController::class,'getAllDepartments'])->name('getAllDepartments');
Route::post('showAppointments',[ProjectController::class,'showAppointments'])->name('showAppointments')->middleware('auth');
Route::post('/bookAppointment',[ProjectController::class,'bookAppointment'])->name('bookAppointment')->middleware('auth');
