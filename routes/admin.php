<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\TanqueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\HomeControllerAdmin;

Route::get('',[HomeControllerAdmin::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('users',UserController::class)->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('clientes', ClienteController::class)->names('clientes');;

Route::resource('tanques', TanqueController::class);