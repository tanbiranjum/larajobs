<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

// ALL listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Create listing
Route::post('/listings', [ListingController::class, 'store']);

// Update listing form
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register create form
Route::get('/register', [UserController::class, 'create']);
