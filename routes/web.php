<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use \App\Models\User;

use \App\Http\Controllers\AdminController;

Route::get('/', function () {
    Auth::loginUsingId(1);

    $users = User::all();

    return view('welcome', ['users' => $users]);
});

Route::post('/admin/create', [AdminController::class, 'create'])
    ->name('admin.create')
    ->middleware('can:create, App\Models\Admin');

