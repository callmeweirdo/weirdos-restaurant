<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/', [HomeController::class, 'index']);

Route::get('/redirects', [HomeController::class, 'redirects']);

// ? Admin routes
Route::get('/users', [AdminController::class, 'users']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::post('/makefood', [AdminController::class, 'makefood']);
Route::get('deletefood/{id}', [AdminController::class, 'deletefood']);
Route::get('editfood/{id}', [AdminController::class, 'editfood']);
Route::post('updatefood/{id}', [AdminController::class, 'updatefood']);
Route::post('reservation', [AdminController::class, 'reservation']);
Route::get('viewreservations', [AdminController::class, 'viewreservations']);
Route::get('foodchefs', [AdminController::class, 'foodchefs']);
Route::post('makechef', [AdminController::class, 'makechef']);
Route::get('editchef/{id}', [AdminController::class, 'editchef']);
Route::post('updatechef/{id}', [AdminController::class, 'updatechef'] );
Route::get('deletechef/{id}', [AdminController::class, 'deletechef']);
Route::post('addtocart', [HomeController::class, 'addtocart']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
