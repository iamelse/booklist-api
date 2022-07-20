<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\WriterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/books', [BookController::class, 'index']);
Route::get('/book/detail/{id}', [BookController::class, 'show']);

Route::get('/writers', [WriterController::class, 'index']);
Route::get('/books/writer/{writer_id}', [WriterController::class, 'show']);
