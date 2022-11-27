<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UsersTopiController;
use App\Models\Users_Topi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopArticleController;

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ResisterAdminController;

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

//Route::get('/', function () {
//    return view('index');
//});


//記事
Route::get('/article/atama', function () {
    return view('articleAtama');
})->middleware('auth');

Route::get('/article/special', function () {
    return view('articleSpecial');
})->middleware('auth');


//ログイン
Route::get('/login', function () {
    return view('login');
})->name('login');


//toCコントローラー（TopArticle）
Route::get('/', [TopArticleController::class, 'index'])->name('index')->middleware('auth');

//toCコントローラー（Article）
//Route::get('/article/atama', [ArticleController::class, 'index'])->name('articleAtama');

//データ登録
Route::get('/admin/users_topi/index', [UsersTopiController::class, 'index'])->name('admin.users_topi.index')->middleware('auth:administrators');
Route::get('/admin/users_topi/create', [UsersTopiController::class, 'create'])->name('admin.users_topi.store')->middleware('auth:administrators');

Route::post('/admin/users_topi/index', [UsersTopiController::class, 'store'])->name('admin.users_topi.store')->middleware('auth:administrators');

Route::get('/admin/users_topi/{topi}', [UsersTopiController::class, 'edit'])->name('admin.users_topi.edit')->middleware('auth:administrators');

Route::put('/admin/users_topi/{topi}', [UsersTopiController::class, 'update'])->name('admin.users_topi.update')->middleware('auth:administrators');
Route::delete('/admin/users_topi/{topi}', [UsersTopiController::class, 'destroy'])->name('admin.users_topi.destroy')->middleware('auth:administrators');


//認証
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// 管理画面（admin/配下に置くことを想定しています。groupメソッドでまとめると便利です。）

Route::get('/admin/login', [AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login.index');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.login');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.login.logout');


//管理情報の登録
Route::get('/admin/resister', [ResisterAdminController::class, 'create'])->name('admin.resister');
Route::post('/admin/resister', [ResisterAdminController::class, 'store'])->name('admin.resister.store');
