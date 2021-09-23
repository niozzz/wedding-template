<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardC;
use App\Http\Controllers\UserDashboardC;

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

Route::get('/', [HomePage::class, 'index']);
// Route::get('/admin/dashboard', [AdminDashboardC::class, 'index'])->name('admin-dashboard');
Route::get('/user/dashboard', [UserDashboardC::class, 'index'])->name('user-dashboard');

