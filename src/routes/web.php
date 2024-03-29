<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Models\Category;
use App\Models\Contact;

use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CategoryController::class, 'index']);
Route::get('/confirm', [CategoryController::class, 'confirm']);
Route::post('/confirm', [CategoryController::class, 'confirm']);
Route::get('/thanks', [CategoryController::class, 'store']);
Route::post('/thanks', [CategoryController::class, 'store']);

Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'store']);
Route::post('/thanks', [ContactController::class, 'store']);


// Route::middleware('auth')->group(function () {
//     Route::get('/register', [AuthController::class, 'register']);
// });

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'store']);
Route::post('/admin', [AuthController::class, 'admin']);