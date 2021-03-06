<?php

declare(strict_types = 1);

use App\Interface\Images\Controllers\Imagecontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Comment Routes
|--------------------------------------------------------------------------
*/

Route::get('', [Imagecontroller::class, 'index']);
Route::get('/{id}', [Imagecontroller::class, 'show']);
Route::post('', [Imagecontroller::class, 'store']);
Route::put('/{id}', [Imagecontroller::class, 'update']);
Route::delete('/{id}', [Imagecontroller::class, 'delete']);
