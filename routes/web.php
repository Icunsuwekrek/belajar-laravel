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
Route::post('/login/create', [AuthController::class, 'create']);
Route::get('/login/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class,  'logout'])->middleware('auth');
Route::get('/', function () {
    return view('home', [
        'nama' => 'Favian',
        'buah' => ['Tuban', 'Laki Laki', '12 November 2005','TSM30','R','S']
        
    ]);
});

Route::get('/student', [StudentController::class, 'index']);
// Route::resource('/student', [StudentController::class, 'craete', 'update', 'destroy', 'show'])->middleware('auth');   mencoba kalo function yang dipanggil itu ditentukan
Route::get('/student-add',[StudentController::class,'create'])->middleware('auth');
Route::post('/student',[StudentController::class,'store'])->middleware('auth');
Route::get('/student/{id}',[StudentController::class,'show'])->middleware('auth');
// Route::get('/student/{id}/edit',[StudentController::class,'showedit']);
Route::get('/student-edit/{id}',[StudentController::class,'edit'])->middleware('auth');
Route::put('/student/{id}',[StudentController::class,'update'])->middleware('auth');
Route::delete('/student/{id}',[StudentController::class,'destroy'])->middleware('auth');

    
