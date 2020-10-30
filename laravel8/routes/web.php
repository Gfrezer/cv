<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\messageUserController;
use App\Http\Controllers\loginAdminController;
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
    return view('pagePrincipale/accueil');
})->name('accueil');
Route::resource('contact',ContactController::class);
Route::resource('message',messageUserController::class);
Route::get('/login',function () {
    return view('admin/adminLogin');
});
Route::post('admin',[loginAdminController::class,'authenticate']);