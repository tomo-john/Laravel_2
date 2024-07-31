<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

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


Route::get('/memos', [MemoController::class, 'index'])->name('memos.index');

Route::get('/memos/create', [MemoController::class, 'create'])->name('memos.create');
Route::post('/memos', [MemoController::class, 'store'])->name('memos.store');

