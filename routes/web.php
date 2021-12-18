<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Livewire\Animals;
use App\Http\Livewire\Doctors;
use App\Http\Livewire\AnimalsDoctors;

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

Route::get('animales', Animals::class)->name('animals');
Route::get('doctores', Doctors::class)->name('doctors');
Route::get('doctor/{doctor}/mascotas', AnimalsDoctors::class)->name('animals_doctors');
