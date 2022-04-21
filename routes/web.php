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
use App\Models\Developers;

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
Route::post('/projects/store',[ProjectController::class, 'store']);
Route::get('projects/delete/{id}',[ProjectController::class, 'delete']);
Route::get('/projects/getProject/{id}',[ProjectController::class, 'getProject']);
// payments
Route::get('/payments', [PaymentsController::class, 'index']);
// tasks
Route::get('/tasks', [TasksController::class,'index']);
Route::post('/tasks/store',[ClientsController::class, 'store']);
// clients
Route::get('/clients',[ClientsController::class,'index']);
Route::post('/clients/store',[ClientsController::class, 'store']);
Route::post('/clients/update',[ClientsController::class, 'update']);
Route::get('/clients/delete/{id}',[ClientsController::class, 'delete']);
Route::get('/clients/getclient/{id}',[ClientsController::class, 'getclient']);

// wages
Route::get('/salary',[SalaryController::class,'index']);
// finance
Route::get('/finances',[FinanceController::class,'index']);
// login
Route::get('/login', [LoginController::class, 'index']);
// developer
Route::get('/developers', [DevelopersController::class,'index']);
Route::post('/developers/store', [DevelopersController::class,'store']);
Route::get('/developer/delete/{id}', [DevelopersController::class,'delete']);
Route::get('/developers/getDeveloper/{id}', [DevelopersController::class,'getDeveloper']);
// platform
Route::get('/platform', [PlatformController::class, 'index']);
Route::post('/clients/store',[ClientsController::class, 'store']);
// category
Route::get('/category', [CategoryController::class ,'index']);
Route::post('/clients/store',[ClientsController::class, 'store']);
// recofery
Route::get('/recovery', [RecoferyController::class, 'index']);



