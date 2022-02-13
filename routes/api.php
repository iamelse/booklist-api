<?php

use App\Http\Controllers\BookApiController;
use App\Http\Controllers\WriterApiController;
use Illuminate\Http\Request;
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

Route::get('/books', [BookApiController::class, 'index']);
Route::get('/book/detail/{id}', [BookApiController::class, 'show']);

Route::get('/writers', [WriterApiController::class, 'index']);
Route::get('/books/writer/{writer_id}', [WriterApiController::class, 'show']);
