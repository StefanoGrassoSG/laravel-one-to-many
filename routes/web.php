<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//controllers 
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\PrivateController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Public route
Route::get('/', [PublicController::class, 'index'])->name('home');

//private route
Route::get('admin/dashboard', [PrivateController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');

require __DIR__.'/auth.php';