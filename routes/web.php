<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WoController;

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
    return view('welcome');
});

Route::get('/wo', [WoController::class, 'index'])->name('wo');

Route::get('/tambahwo', [WoController::class, 'tambahwo'])->name('tambahwo');

Route::post('/insertdata', [WoController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [WoController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{id}', [WoController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [WoController::class, 'delete'])->name('delete');


//export pdf
Route::get('/exportpdf', [WoController::class, 'exportpdf'])->name('exportpdf');
//export xls
Route::get('/exportexcel', [WoController::class, 'exportexcel'])->name('exportexcel');
//import xls
Route::post('/importexcel', [WoController::class, 'importexcel'])->name('importexcel');
