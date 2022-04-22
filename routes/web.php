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
use App\Models\Category;
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
Route::controller(ClientsController::class)->group(function(){
Route::get('/clients','index');
Route::post('/clients/store', 'store');
Route::post('/clients/update', 'update');
Route::get('/clients/delete/{id}','delete');
Route::get('/clients/getclient/{id}','getclient');
});


// wages
Route::get('/salary',[SalaryController::class,'index']);
// finance
Route::get('/finances',[FinanceController::class,'index']);
// login
Route::get('/login', [LoginController::class, 'index']);
// developer
Route::controller(DevelopersController::class)->group(function(){
Route::get('/developers', 'index');
Route::post('/developers/store','store');
Route::get('/developer/delete/{id}','delete');
Route::get('/developers/getDeveloper/{id}','getDeveloper');
});
// platform
Route::controller(PlatformController::class)->group(function(){
Route::get('/platform', 'index');
Route::post('/clients/store', 'store');
});
// category
Route::controller(Category::class)->group(function(){
Route::get('/category', 'index');
Route::post('/clients/store', 'store');
});
// recofery
Route::get('/recovery', [RecoferyController::class, 'index']);



