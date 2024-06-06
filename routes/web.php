<?php

use App\Http\Controllers\Admin\ForumController;
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

Route::get('/', [ForumController::class, 'index'])->name('forum.index');

Route::get('/form', [ForumController::class, 'form'])->name('forum.form');

Route::post('/cadastrar', [ForumController::class, 'cadastrar'])->name('forum.cadastrar');