<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\StnkController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('login');
});

Auth::routes([
    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Master STNK
Route::get('stnk', [StnkController::class, 'index'])->name('stnk.index');
Route::get('stnk/create', [StnkController::class, 'create'])->name('stnk.create');
Route::post('stnk/store', [StnkController::class, 'store'])->name('stnk.store');
Route::get('stnk/edit/{id}', [StnkController::class, 'edit'])->name('stnk.edit');
Route::get('stnk/detail/{id}', [StnkController::class, 'detail'])->name('stnk.detail');
Route::put('stnk/update/{id}', [StnkController::class, 'update'])->name('stnk.update');



//Report
Route::get('report', [ReportController::class, 'index'])->name('report.index');
