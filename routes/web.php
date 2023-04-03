<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\FileController;

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
    return redirect()->route('home');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/icosteis-2023', [SiteController::class, 'index'])->name('home');
Route::get('/submission/icosteis-2023', [SiteController::class, 'submission'])->name('submission');
Route::get('/profile', [SiteController::class, 'profile'])->name('profile');

Route::group(['middleware' => ['auth','verified','checkrole:admin']], function(){
    Route::get('/admin/papers', [FileController::class, 'papers'])->name('admin.papers');
    Route::post('/admin/papers/add', [FileController::class, 'addPaper'])->name('admin.add.paper');
    Route::get('/admin/delete/{paper}', [FileController::class, 'deletePaper'])->name('admin.delete.paper');
});

/*Route::get('/home', [SiteController::class, 'index'])->middleware(['auth', 'verified'])->name('home');*/
