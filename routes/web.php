<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\WagesController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\RecoferyController;
use App\Http\Controllers\SalaryController;

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
// dasboard
Route::get('/',[DashboardController::class,'index']);
// project
Route::get('/projects', [ProjectController::class,'index']);
// payments
Route::get('/payments', [PaymentsController::class, 'index']);
// tasks
Route::get('/tasks', [TasksController::class,'index']);
// clients
Route::get('/clients',[ClientsController::class,'index']);
// wages
Route::get('/salary',[SalaryController::class,'index']);
// finance
Route::get('/finances',[FinanceController::class,'index']);
// login
Route::get('/login', [LoginController::class, 'index']);
// developer
Route::get('/developers', [DevelopersController::class,'index']);
// platform
Route::get('/platform', [PlatformController::class, 'index']);
// category
Route::get('/categories',[CategoryController::class ,'index']);
// recofery
Route::get('/recovery', [RecoferyController::class, 'index']);
