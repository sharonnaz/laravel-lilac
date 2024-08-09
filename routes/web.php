<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController; // Corrected the namespace 'Controller' to 'Controllers'

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

Route::controller(EmployeeController::class)->group(function() {
    Route::get('/', 'getEmployees');
});
