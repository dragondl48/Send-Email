<?php

use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TestsEnrollmentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-email',[SendMailController::class,'sendMail']);
Route::get('/form-add',[SendMailController::class,'getForm']);
 Route::post('/form-add',[SendMailController::class,'handleForm']);
Route::get('/send-testenrollment',[TestsEnrollmentController::class,'sendTestNotification']);