<?php


use App\Http\Controllers\AuthController;
// use App\Http\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::get('/login', [AuthController::class, 'login']) ->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authentication'])->middleware('guest');
Route::get('/logout', [AuthController::class,  'logout'])->middleware('auth');
Route::get('/', function () {
    return view('home', [
        'nama' => 'Ichsan Sani',
        'buah' => ['Klengkeng', 'Semangka', 'Alpukat']
    ]);
})->middleware('auth');

Route::resource('/student', StudentController::class)->middleware('auth');

