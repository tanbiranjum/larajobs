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
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Create listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Update listing form
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create user
Route::post('/users', [UserController::class, 'store']);

// Log out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log in to user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
