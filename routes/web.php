<?php
use App\Http\Controllers\ganiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [ganiController::class, 'index'])->name('pages.admin.index');