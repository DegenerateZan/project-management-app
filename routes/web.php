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
use App\Http\Controllers\TaskController;
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
Route::controller(DashboardController::class)->group(function(){
Route::get('/','index');
});
// project
Route::controller(ProjectController::class)->group(function(){
Route::get('/projects', 'index')->name('project.index');
Route::post('/projects/update/{id}', 'update')->name('project.update');
Route::post('/projects/store', 'store')->name('project.store');
Route::get('projects/delete/{id}','delete')->name('project.delete');
Route::get('/projects/getProjectByid/{id}', 'getProjectByid')->name('project.byid');
Route::get('/Projects/getProjectsByidClients/{id}', 'getProjectsByidClients');
});
// payments
Route::controller(PaymentsController::class)->group(function(){
Route::get('/payments','index');
});
// tasks
Route::controller(TasksController::class)->group(function(){

Route::get('/tasks', 'false');
Route::get('/tasks/from_project/{id}','show');
Route::post('/tasks/store', 'store');
});
// clients
Route::controller(ClientsController::class)->group(function(){
Route::get('/clients','index');
Route::post('/clients/store', 'store');
Route::post('/clients/update/{id}', 'update');
Route::get('/clients/delete/{id}','delete');
Route::get('/clients/getclient/{id}','getclient');
});


// wages
Route::controller(SalaryController::class)->group(function(){
Route::get('/salary','index');
});
// finance
Route::controller(FinanceController::class)->group(function(){
Route::get('/finances','index');
});
// login
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});
// developer
Route::controller(DevelopersController::class)->group(function(){
Route::get('/developers', 'index');
Route::post('/developers/store','store');
Route::get('/developers/delete/{id}','delete');
Route::get('/developers/update/{id}','update');
Route::get('/developers/getDeveloper/{id}','getDeveloper');
});
// platform
Route::controller(PlatformController::class)->group(function(){
Route::get('/platform', 'index');

Route::post('/clients/store', 'store');
Route::get('/platform/getPlatform/{id}', 'getPlatform');
Route::get('/platform/checkproject/{id}', 'checkproject');



});
// category
Route::controller(CategoryController::class)->group(function(){
Route::get('/category', 'index');
Route::post('/clients/store', 'store');
Route::get('/category/getCategory/{id}', 'getCategory');
Route::get('/category/checkproject/{id}', 'checkproject');


});
// recofery
Route::controller(RecoferyController::class)->group(function(){
Route::get('/recovery','index');
});


