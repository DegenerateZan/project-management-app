<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard.dashboard', );
});
Route::get('/projects', function () {
    return view('projects.projects');
});
Route::get('/payments', function () {
    return view('payments.payments');
});
Route::get('/tasks', function () {
    return view('tasks.tasks');
});
Route::get('/clients', function () {
    return view('clients.clients');
});
Route::get('/wages', function () {
    return view('wages.wages');
});
Route::get('/finance', function () {
    return view('finance.finance');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/developers', function () {
    return view('developers.developers');
});
Route::get('/settings', function () {
    return view('settings.settings');
});
Route::get('/recovery', function () {
    return view('recovery.recovery');
});
