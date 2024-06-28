<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ExportController;



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

//admin controller
Route::get('/admin-dashboard',[AdmindashboardController::class,'admindashboard']);
Route::get('/login',[AdmindashboardController::class,'login']);
Route::get('/register',[AdmindashboardController::class,'register']);

//users controller
Route::get('/users',[UserController::class,'users']);
Route::post('/users',[UserController::class,'data']);  
Route::get('/userview',[UserController::class,'viewdata']);
Route::get('/useredit',[UserController::class,'editdata']);


//subscription controller
Route::get('/subscription',[SubscriptionController::class,'subscription']);
Route::post('/subscription',[SubscriptionController::class,'data']);  
Route::get('/subscriptionview',[SubscriptionController::class,'viewdata']);
Route::get('/subscriptionedit',[SubscriptionController::class,'editdata']);

//import controller
Route::get('/import',[ImportController::class,'import']);


//export controller
Route::get('/export',[ExportController::class,'export']);



//companies controller
Route::get('/companies',[CompaniesController::class,'companies']);
Route::post('/companies',[CompaniesController::class,'data']);  
Route::get('/companiesview',[CompaniesController::class,'viewdata']);
Route::get('/companiesedit',[CompaniesController::class,'editdata']);


//ticket controller
Route::get('/tickets',[TicketController::class,'ticket']);
Route::post('/tickets',[TicketController::class,'data']);  
Route::get('/ticketsview',[TicketController::class,'viewdata']);
Route::get('/ticketsedit',[TicketController::class,'editdata']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
