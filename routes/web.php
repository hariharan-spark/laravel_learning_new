<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendBulkMailController;
use App\Http\Controllers\EloquentController;
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
    return view('welcome');
});

Route::get('send-bulk-mail', [SendBulkMailController::class, 'sendBulkMail'])->name('send-bulk-mail');
Route::get('view-form', [EloquentController::class, 'viewForm']);
Route::POST('/relationship', [EloquentController::class, 'createRecord'])->name('create');
Route::get('get-form', [EloquentController::class, 'getData']);
Route::POST('/comments', [EloquentController::class, 'commentsRecord']);


Route::get('register', [RegisterController::class, 'create']);
Route::post('store', [RegisterController::class, 'store']);
Route::Post('user-update', [RegisterController::class, 'userUpdate']);
Route::get('user-delete/{id}', [RegisterController::class, 'userDelete']);










