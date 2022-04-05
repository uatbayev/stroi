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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/faq', [\App\Http\Controllers\HomeController::class, 'faq'])->name('home_faq');
Route::get('/page', [\App\Http\Controllers\PageController::class, 'index'])->name('page');
Route::get('/page_see/{recomplex_id}', [\App\Http\Controllers\PageController::class, 'page_see'])->name('page_see');
Route::get('/config', [\App\Http\Controllers\ConfigController::class, 'index']);

Route::middleware('guest')->group(function(){
    Route::get('/signup', [\App\Http\Controllers\AuthController::class, 'getSignup'])->name('auth.register');
    Route::post('/signup', [\App\Http\Controllers\AuthController::class, 'postSignup']);
    Route::get('/signin', [\App\Http\Controllers\AuthController::class, 'getSignin'])->name('auth.login');
    Route::post('/signin', [\App\Http\Controllers\AuthController::class, 'postSignin']);
});

Route::group(['middleware'=> ['auth']], function (){
    Route::get('/add_flat/{user_id}/{flat_id}', [\App\Http\Controllers\PageController::class, 'add_flat'])->name('add_flat');
    Route::get('/application/{user_id}', [\App\Http\Controllers\PageController::class, 'get_application'])->name('application');
});

Route::group(['prefix'=>'admin', 'middleware'=> ['auth']], function (){
    Route::get('/main', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::resource('/user', \App\Http\Controllers\UserController::class);
    Route::resource('/district', \App\Http\Controllers\DistrictController::class);
    Route::resource('/hometype', \App\Http\Controllers\HometypeController::class);
    Route::resource('/recomplex', \App\Http\Controllers\RecomplexController::class);
    Route::resource('/flat', \App\Http\Controllers\FlatController::class);
    Route::get('/flatreport', [\App\Http\Controllers\FlatController::class, 'flat_report'])->name('flat_report');
    Route::get('/flatlist', [\App\Http\Controllers\FlatController::class, 'flat_list'])->name('flat_list');
    Route::post('/flatsave', [\App\Http\Controllers\FlatController::class, 'flat_save'])->name('flat_save');

});

Route::get('/signout', [\App\Http\Controllers\AuthController::class, 'getSignout'])->name('auth.logout');
