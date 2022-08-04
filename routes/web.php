<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;



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
Route::get('/register' ,[LoginController::class, 'register'])->name('register');
Route::get('/login' ,[LoginController::class, 'index'])->name('login');
Route::get('/' , [HomeController::class, 'index'])->name('home');
Route::get('/tasknew' , [TaskController::class, 'create'])->name('new-task');
Route::get('/taskedit' , [TaskController::class, 'edit'])->name('edit-task');
Route::get('/taskdelete' , [TaskController::class, 'delete'])->name('delete-task');




