<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home.home');})->name('dashboard');
});
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/add-student', [StudentController::class, 'addStudent'])->name('add-student');
    Route::post('/new-student', [StudentController::class, 'newStudent'])->name('new-student');
    Route::post('/update-student', [StudentController::class, 'updateStudent'])->name('update-student');
    Route::get('/manage-student', [StudentController::class, 'manageStudent'])->name('manage-student');
    Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('delete-student');
    Route::get('/edit-student/{id}', [StudentController::class, 'editStudent'])->name('edit-student');
});
