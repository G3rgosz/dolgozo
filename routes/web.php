<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
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


Route::get('/add-worker', function () {
    return view('create_employee');
});
Route::post("/create", [WorkerController::class, "store"]);
Route::get("/employees", [WorkerController::class, "index"]);
Route::get("/employees/{id}", [WorkerController::class, "show"]);
Route::get('/update/{employee}', [WorkerController::class, 'edit']);
Route::put('/update/{employee}', [WorkerController::class, 'update']);
Route::delete('/delete/{id}', [WorkerController::class, 'destroy']);