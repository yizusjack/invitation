<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;

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

Route::get('/', function () {
    //return view('landing');
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route::resource('guest', GuestController::class);
Route::resource('event', EventController::class)->middleware('auth');

Route::get('event/{event}/guest/create', [GuestController::class, 'create'])->name('guest.create')->middleware('auth');
Route::post('event/{event}/guest', [GuestController::class, 'store'])->name('guest.store')->middleware('auth');
Route::get('event/{event}/guest/{guest}', [GuestController::class, 'show'])->name('guest.show');
Route::get('event/{event}/guest/{guest}/edit', [GuestController::class, 'edit'])->name('guest.edit')->middleware('auth');
Route::patch('event/{event}/guest/{guest}', [GuestController::class, 'update'])->name('guest.update')->middleware('auth');
Route::delete('event/{event}/guest/{guest}', [GuestController::class, 'destroy'])->name('guest.destroy')->middleware('auth');
Route::patch('guest/confirm/{guest}', [GuestController::class, 'confirm'])->name('guest.confirm');
