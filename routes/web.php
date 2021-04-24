<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('list',[PostController::class, 'show']);
Route::view('add', 'add');
Route::view('edit', 'edit');
Route::post('add', [PostController::class, 'addData']);
Route::get('delete-data/{id}', [PostController::class, 'deleteData']);
Route::get('edit-data/{id}', [PostController::class, 'editData']);
Route::post('edit', [PostController::class, 'updateData']);

