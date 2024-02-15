<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\Auth\UserController;

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
Route::get('/', [HomeController::class, 'root'])->name('home');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-submit', [UserController::class, 'login_submit'])->name('login_submit');
Route::get('/forget-password', [UserController::class, 'forget_password'])->name('forget_password');
Route::post('/forget-password-submit', [UserController::class, 'forget_password_submit'])->name('forget_password_submit');
Route::get('/reset-password/{token}/{email}', [UserController::class, 'reset_password'])->name('reset_password');
Route::post('/reset-password-submit', [UserController::class, 'reset_password_submit'])->name('reset_password_submit');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');



Route::group(['middleware' => 'role:Admin'], function () {
    // Routes accessible only to users with 'admin' or 'editor' role
    // Add your routes here
});

Route::group(['middleware' => 'role:Admin,User'], function () {
    // Routes accessible only to users with 'admin' or 'editor' role
    // Add your routes here
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguagesController@switchLang']);

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
    Route::get('/company/{id}', [CompanyController::class, 'details'])->name('company');
    Route::get('/company-add', [CompanyController::class, 'add'])->name('company_add');
    Route::post('/company-store', [CompanyController::class, 'store'])->name('company_store');
    Route::get('/company-edit/{id}', [CompanyController::class, 'edit'])->name('company_edit');
    Route::post('/company-update/{id}', [CompanyController::class, 'update'])->name('company_update');
    Route::get('/company-delete/{id}', [CompanyController::class, 'delete'])->name('company_delete');
    
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
    Route::get('/employee/{id}', [EmployeeController::class, 'details'])->name('employee');
    Route::get('/employee-add', [EmployeeController::class, 'add'])->name('employee_add');
    Route::post('/employee-store', [EmployeeController::class, 'store'])->name('employee_store');
    Route::get('/employee-edit/{id}', [EmployeeController::class, 'edit'])->name('employee_edit');
    Route::post('/employee-update/{id}', [EmployeeController::class, 'update'])->name('employee_update');
    Route::get('/employee-delete/{id}', [EmployeeController::class, 'delete'])->name('employee_delete');
    
    Route::get('/approvals', [ApprovalController::class, 'index'])->name('approvals');
    Route::get('/approval/{id}', [ApprovalController::class, 'details'])->name('approval');
    Route::get('/approval-add', [ApprovalController::class, 'add'])->name('approval_add');
    Route::post('/approval-store', [ApprovalController::class, 'store'])->name('approval_store');
    Route::get('/approval-edit/{id}', [ApprovalController::class, 'edit'])->name('approval_edit');
    Route::post('/approval-update/{id}', [ApprovalController::class, 'update'])->name('approval_update');
    Route::get('/approval-delete/{id}', [ApprovalController::class, 'delete'])->name('approval_delete');
    
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/user/{id}', [UserController::class, 'details'])->name('user');
    Route::get('/user-add', [UserController::class, 'add'])->name('user_add');
    Route::post('/user-store', [UserController::class, 'store'])->name('user_store');
    Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user_edit');
    Route::post('/user-update', [UserController::class, 'update'])->name('user_update');
    Route::get('/user-delete/{id}', [UserController::class, 'delete'])->name('user_delete');
    


});



