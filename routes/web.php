<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebController;
// ############ Admin Panel  ##############
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;



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

Route::get('', [WebController::class, 'web']);
Route::get('/contact-us',[WebController::class, 'contact']);
Route::get('/about-us', [WebController::class, 'about']);
Route::get('/product-detail/{id}', [WebController::class, 'product_detail']);
Route::Post('/contact-us',[WebController::class, 'formdata']);

// ############ Admin Panel  ##############

// Route::view('login', 'login');
Route::get('admin/login', [AuthController::class, 'login']);
Route::get('admin/change-password', [AuthController::class, 'change']);
Route::get('admin/forgot-password', [AuthController::class, 'forgot']);

Route::get('admin/deshboard', [AuthController::class, 'deshboard']);

// ############  contact ##############
Route::get('admin/contact', [ContactController::class, 'index']);

// ############  product ############## 
Route::get('admin/product', [ProductController::class, 'product']);
Route::get('admin/product-add', [ProductController::class, 'add']);
Route::post('admin/product-save', [ProductController::class, 'save']);
Route::get('admin/product-edit/{id}', [ProductController::class, 'edit']);
Route::Post('admin/product-update',[ProductController::class, 'update']);
Route::get('admin/product-view/{id}', [ProductController::class, 'view']);
Route::get('admin/product-delete/{id}', [ProductController::class, 'delete']);
Route::get('admin/product-archive', [ProductController::class, 'archive']);
Route::get('admin/product-restore/{id}', [ProductController::class, 'restore']);

// ############  pages ############## 
Route::get('admin/page', [PageController::class, 'page']);
Route::get('admin/page-view/{id}', [PageController::class, 'view']);
Route::get('admin/page-add', [PageController::class, 'add']);
Route::post('admin/page-save', [PageController::class, 'save']);
Route::get('admin/page-edit/{id}', [PageController::class, 'edit']);
Route::Post('admin/page-update',[PageController::class, 'update']);
Route::get('admin/page-delete/{id}', [PageController::class, 'delete']);
Route::get('admin/page-archive', [PageController::class, 'archive']);
Route::get('admin/page-restore/{id}', [PageController::class, 'restore']);



