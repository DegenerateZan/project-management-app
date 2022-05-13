<?php


use App\Http\Controllers\CookieController;
use App\Http\Controllers\ResetpasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectPlatfromController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\WagesController;
use App\Http\Controllers\VerifyController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\RecoveryController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TaskController;
use App\Models\Category;
use App\Models\Developers;
use App\Models\ProjectPlatfrom;

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
Route::get('/','index')->middleware('auth');
});
// project
Route::controller(ProjectController::class)->group(function(){
Route::get('/projects', 'index')->name('project.index')->middleware('auth');
Route::post('/projects/update/{id}', 'update')->name('project.update');
Route::post('/projects/store', 'store')->name('project.store');
Route::get('projects/delete/{id}','delete')->name('project.delete');
Route::get('projects/getProjectByidcategory/{id}','getProjectByidcategory')->name('project.getProjectByidcategory');
Route::get('/projects/getProjectByid/{id}', 'getProjectByid')->name('project.byid');
Route::get('/Projects/getProjectsByidClients/{id}', 'getProjectsByidClients');
});
// payments
Route::controller(PaymentsController::class)->group(function(){
Route::get('/payments', 'false');
Route::get('/payments/from_project/{id}','show')->middleware('auth');
Route::post('/payments/store','store')->name('payments.store');
Route::get('/payments/delete/{id}','delete');
Route::post('/payments/update/{id}','update');
Route::get('/payments/getdataPayments/{id}','getdataPayments');
Route::get('/payments/getPaymentsByidproject/{id}','getPaymentsByidproject');
Route::get('/payments/changetopaidoff/{id}/{idproject}', "updatetopaidoff");
Route::get('/payments/changetohasntpaidoff/{id}/{idproject}', 'updatetohasntpaidoff');
});
// tasks
Route::controller(TasksController::class)->group(function(){
Route::get('/tasks', 'false');
Route::get('/tasks/from_project/{id}','show')->middleware('auth');
Route::post('/tasks/from_project/tasks/update/{id}','update')->middleware('auth');
Route::get('/tasks/getTasksByid/{id}','getTaskByid')->middleware('auth');
Route::post('/tasks/from_project/tasks/store','store')->name('tasks.store');
Route::get('/tasks/deleted/{id}','deleted');
Route::post('/tasks/store', 'store');
});
// clients
Route::controller(ClientsController::class)->group(function(){
Route::get('/clients','index')->middleware('auth');
Route::post('/clients/store', 'store');
Route::post('/clients/update/{id}', 'update');
Route::get('/clients/delete/{id}','delete');
Route::get('/clients/getclient/{id}','getclient');
});


// wages
Route::controller(SalaryController::class)->group(function(){

Route::get('/salary','index')->middleware('auth');
Route::get('/salary/getsalaryByidDeveloper/{id}', 'getsalaryByidDeveloper');
Route::post('/salary/store', 'store')->name('salary.store');
Route::get('/salary/getsalaryById/{id}', 'getsalaryById');
Route::post('/salary/update/{id}', 'update');
Route::get('/salary/delete/{id}','delete')->name('salary.delete');
});
// finance
Route::controller(FinanceController::class)->group(function(){
Route::get('/finance/getdatapayments', 'getdatapayment');
Route::get('/finance/getdatasalary', 'getdatasalary');
Route::get('/finances/formfinance', 'formfinance')->middleware('auth');
Route::post('/finace/store', 'store')->name('finances.store');
Route::get('/finances','index')->middleware('auth');
});
Route::controller(FinanceSettingController::class)->group(function(){
Route::get('/financessettins','index');
});
// login
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});
// developer
Route::controller(DevelopersController::class)->group(function(){
Route::get('/developers', 'index')->middleware('auth');
Route::post('/developers/store','store');
Route::get('/developers/delete/{id}','delete');
Route::post('/developers/update/{id}','update');
Route::get('/developers/getsalaryByidDeveloper/{id}', 'getsalaryByidDeveloper');
Route::get('/developers/getDeveloper/{id}','getDeveloper');
});
// platform
Route::controller(PlatformController::class)->group(function(){
Route::get('/platform', 'index')->middleware('auth');
Route::post('/platform/store', 'store')->middleware('auth')->name('platform.store');
Route::get('/platform/delete/{id}', 'delete');
Route::get('/platform/getPlatform/{id}', 'getPlatform');
Route::get('/getDataProjectPlatform/{id}', 'getDataProjectPlatform');
Route::post('/ProjectPlatform/update/{id}', 'ProjectPlatformUpdate');
Route::get('/ProjectPlatform', 'ProjectPlatform')->middleware('auth');
Route::get('/ProjectPlatform/deleted/{id}', 'ProjectPlatformDeleted')->middleware('auth');
Route::post('/ProjectPlatform/store', 'ProjectPlatformStore')->middleware('auth')->name('projectplatform.store');
Route::get('/platform/getPlatformByid/{id}', 'getplatform')->middleware('auth');
Route::post('/platform/update/{id}', 'update')->middleware('auth');
Route::get('/platform/getPlatform/{id}', 'getPlatform');
Route::get('/platform/checkproject/{id}', 'checkproject');
Route::get('/getDataProjectPlatformByidPlatforms/{id}', 'getDataProjectPlatformByidPlatforms');



});
// projectplatform

    

// category
Route::controller(CategoryController::class)->group(function(){

Route::get('/category', 'index')->middleware('auth');
Route::post('/category/store', 'store')->name('category.store');
Route::get('/category/getCategory/{id}', 'getCategory');
Route::get('/category/checkproject/{id}', 'checkproject');
Route::post('/category/update/{id}', 'update');
Route::get('/category/delete/{id}', 'delete');

});
// recofery
Route::controller(RecoveryController::class)->group(function(){

Route::get('/recovery','getEmail');
Route::post('/postemail','postEmail');

});

Route::controller(VerifyController::class)->group(function(){
Route::get('/codeverify','index');
Route::post('/verify','verify');
});

Route::controller(ResetPasswordController::class)->group(function(){
Route::get('/resetpassword/{token}','index');
Route::post('/resetpassword','updatePassword');

});


