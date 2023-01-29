<?php

use App\Http\Controllers\SelectController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
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

Route::view('/', 'welcome');

Route::get('/aghna', [SelectController::class, 'index'])->name('aghna');
Route::post('/aghna/search', [SelectController::class, 'search_siswa'])->name('aghna.search');

Route::get('/firta', [SiswaController::class, 'index'])->name('siswa');
