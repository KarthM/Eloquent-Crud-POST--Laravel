<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/students',[studentController::class,'getall']);
Route::get('/addPost',[postcontroller::class,'addPost']);
Route::POST('/createPost',[postcontroller::class,'createPost'])->name('post.create');
Route::get('/getpost',[postcontroller::class,'getPost'])->name('post.getPost');
Route::get('/singlepost/{id}',[postcontroller::class,'getPostById'])->name('post.getPost');
Route::get('/deletepost/{id}',[postcontroller::class,'deletepost'])->name('post.delPost');
Route::get('/editpost/{id}',[postcontroller::class,'editpost'])->name('post.editPost');
Route::Post('/updatepost',[postcontroller::class,'updatepost'])->name('post.updatePost');