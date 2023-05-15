<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\testController;
use Illuminate\Http\Request;
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

Route::get('/',[homeController::class,"indexAction"])->name('home');
// controller profile
// Route::name('profiles.')->prefix('profiles')->group(function(){
//     Route::controller(profileController::class)->group(function(){
//         Route::get('/',"index")->name('index');
//         Route::get('/create',"create")->name('create');
//         Route::get('/{profile}/edit','edit')->name('edit');
//         Route::post('/',"store")->name('store');
//         Route::delete('/{profile}',"destroy")->name('destroy');
//         Route::put('/{profile}','update')->name('update');
//         Route::get('/{profile}',"show")->where('id','\d+')->name('show');
//     });
// });

Route::resource('profiles',profileController::class);
// controller setting

Route::get('/setting',[settingController::class,"index"])->name('settings.index');
// controller test
Route::get('/test',[testController::class,"index"]);
// controller login
Route::get('/login',[loginController::class,'show'])->name('login.show');
Route::post('/valide',[loginController::class,'login'])->name('login');
Route::get('/logout',[loginController::class,'logout'])->name('login.logout');
