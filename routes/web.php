<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GeocacheController;
use App\Http\Controllers\PricingController;
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

Route::get('/', [PricingController::class, 'index']);

Route::resource('/geocache', GeocacheController::class);
Route::post('/comments/{geocache_id}', [CommentsController::class, 'store']);
// Route::get("/pricing", [PricingController::class, 'index']);
Route::get("/pricing/create", [PricingController::class, 'create']);
Route::get("/pricing/{id}/edit", [PricingController::class, 'edit']);
Route::put("/pricing/{id}/edit", [PricingController::class, 'update']);
Route::delete("/pricing/{id}", [PricingController::class, 'destroy']);
Route::get("/pricing/list", [PricingController::class, 'list'])->name("list");
Route::post("/pricing/create", [PricingController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
