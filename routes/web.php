<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function () {
    $user = App\Models\User::select("id","name","email")->get();
    return view('welcome',["user" => $user]);
    
});
Route::get('/user/one', function () {
    $users = App\Models\User::lazy();
    return view('welcome',["users" => $users]);  
});
