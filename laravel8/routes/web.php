<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\loginAdminController;
use App\Http\Controllers\Admin\MessageUpdateUserController;

use App\Http\Controllers\ContactClientController;
use App\Http\Controllers\MessageUserController;
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
//ACCUEIL

Route::get('/',function () {
    return view('/pagePrincipale/monCv');
});

//RGPD
Route::get('/rgpd',function () {
    return view('/pagePrincipale/rgpd');
});


//Message Contact
Route::post('formContact',[ContactClientController::class,'store']);
Route::get('formContact',[ContactClientController::class,'index']);



//Message visuel CV
Route::post('message',[MessageUserController::class,'store'])->name("message.store");
Route::get('message',[MessageUserController::class,'index']);
Route::get('/mon_cv',[MessageUserController::class,'show'])->name('accueil');


//ADMIN
Route::post('admin',[LoginAdminController::class,'adminLogin']);
Route::get('logout',[LoginAdminController::class,'logout']);
Route::get('admin',[AdminController::class,'index'])->middleware('authAdmin');
Route::post('valide/{id}',[AdminController::class,'update'])->middleware('authAdmin');
Route::post('destroy/{id}',[AdminController::class,'destroy'])->middleware('authAdmin');
Route::get('/login',function () {
    return view('admin/adminLogin');
});