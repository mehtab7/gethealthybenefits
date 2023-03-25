<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy-policy');
Route::get('blogs/{slug}', [HomeController::class, 'getBlog']);
Route::get('admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('admin/login-form',[AuthController::class,'login'])->name('admin.login.perform');
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
      return view('admin.content.dashboard');
    })->name('admin.dashboard');

    Route::get('blogs/add', [BlogController::class, 'create'])->name('blogs.add');
    // Route::get('blogs/update', [BlogController::class, 'create'])->name('blogs.add');
    Route::post('blogs/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('blogs/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blogs.delete');
    Route::get('blogs/list', [BlogController::class, 'index'])->name('blogs.list');
    Route::post('blogs/update-status', [BlogController::class, 'updateStatus'])->name('blogs.status');

    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
});
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {


//     // Route::get('/dashboard', function () {
//     //     return view('admin.content.dashboard');
//     // })->name('admin.dashboard');

//     // PACKAGES
    
// });
