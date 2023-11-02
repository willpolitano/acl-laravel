<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use \App\Models\User;

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
    Auth::loginUsingId(1);

    $users = User::all();

    return view('welcome', ['users' => $users]);
});
