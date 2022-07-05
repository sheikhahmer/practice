<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\MailController;




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

Route::get('/index',[RelationController::class,'index'])->name('index');


Route::get('users', [RelationController::class, 'users'])->name('users');

Route::get('programe', [RelationController::class, 'programe'])->name('programe');

Route::post('store', [RelationController::class, 'store'])->name('store');

Route::get('string', [RelationController::class, 'string'])->name('string');

Route::post('substring', [RelationController::class, 'substring'])->name('substring');

Route::get('passing_data',[RelationController::class,'passing_data'])->name('passing_data')->middleware('auth');

Route::post('/add',[RelationController::class,'add'])->name('add');

Route::get('/fetch_customers',[RelationController::class,'fetch_customers'])->name('fetch_customers');

// ROUTES FOR SENDING EMAIL

Route::get('/contact_us',[MailController::class,'contact_us'])->name('contact_us')->middleware('auth');

Route::post('/add_contact',[MailController::class,'add_contact'])->name('add_contact');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
