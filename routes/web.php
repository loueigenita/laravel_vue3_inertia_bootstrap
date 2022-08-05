<?php
use App\Http\Controllers\PioneerController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/pioneer', [PageController::class, 'pioneer']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/pioneer', [PioneerController::class, 'index']);
