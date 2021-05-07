<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\UserAuth;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::view('add', 'add');
// Route::view('edit', 'edit');
// Route::view('profile', 'profile');
// Route::get('list',[PostController::class, 'show']);
// Route::post('add', [PostController::class, 'addData']);
// Route::get('delete-data/{id}', [PostController::class, 'deleteData']);
// Route::get('edit-data/{id}', [PostController::class, 'editData']);
// Route::post('edit', [PostController::class, 'updateData']);
// Route::post('user',[UserAuth::class, 'userLogin']);

// Route::get('/login', function () {
//     if(session()->has('user'))
//     {
//        return redirect('profile');
//     }
//     return view('login');
// });

// Route::get('/logout', function () {
//     if(session()->has('user'))
//     {
//         session()->pull('user');
//     }
//     return redirect('login');
// });

// dont have time for my original code soooo.. :(

Route::get('/home', function () {
    return redirect('/posts');
});


Route::get('/delete-blank-post', [App\Http\Controllers\PostController::class, 'deleteBlank']);
Route::get('/posts-archive', [App\Http\Controllers\PostController::class, 'archive']);
Route::get('/posts/{id}/restore', [App\Http\Controllers\PostController::class, 'restore']);
Route::resource('/posts', App\Http\Controllers\PostController::class);
Route::resource('/comments', App\Http\Controllers\CommentController::class);