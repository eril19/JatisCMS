<?php

use App\Http\Controllers\AuthenController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use App\Models\Form;
use Illuminate\Support\Facades\DB;
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
    $forms = DB::table('forms')->get();
    return view('contact-us',compact('forms'));
})->middleware('auth');

Route::put('/',[FormController::class,'update']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register',[RegistrationController::class,'store']);
Route::post('/auth', [AuthenController::class, 'auth']);
Route::get('/crud', function () {
    return view('crud');
})->middleware('auth');

Route::resource('crud',FormController::class);

Route::post('/crud', [AuthenController::class,'auth'])->middleware('auth');

// Route::resource('crud',[FormController::class]);
// Route::resource('user',[UserController::class]);

Route::get('/logout',[AuthenController::class,'logout'])->middleware('auth');