<?php

use App\Http\Controllers\Guest\MoviePageController;
// Use a routes for our application
use App\Http\Controllers\DemoController;
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

Route::get('/', [MoviePageController::class, 'index']);

// Create a routes for our application
Route::get('/demo', [DemoController::class, 'demo'])->name('demo');
