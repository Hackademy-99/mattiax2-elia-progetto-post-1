<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

// ** ROTTA VISTA HOMEPAGE
Route::get('/',[PublicController::class,'homepage'])->name('homepage');

// ** ROTTA VISTA CREATE ARTICLE

Route::get('/Articles/create',[ArticleController::class,'create'])->name('Articles.create');

// ** ROTTA SUBMIT ARTICLE

Route::post('/article/store',[ArticleController::class,'store'])->name('Articles.store');

// ** ROTTA VISTA INDEX

Route::get('/Articles/index',[ArticleController::class,'index'])->name('Articles.index');

//** ROTTA VISTA SHOW

Route::get('/Articles/show/{article}',[ArticleController::class,'show'])->name('Articles.show');

// * ROTTA FILTRO CATEGORIA

Route::get('/Articles/by-category/{category}',[ArticleController::class,'byCategory'])->name('Articles.byCategory');

//  * ROTTA FILTRO AUTORE

Route::get('/Articles/by-user/{user}',[ArticleController::class,'byUser'])->name('Articles.byUser');

// * ROTTA VISTA RICHIESTA RUOLO

Route::get('/careers',[PublicController::class,'careers'])->name('careers');

// * ROTTA SUBMIT RICHIESTA LAVORO

Route::post('/careers/submit',[PublicController::class,'careersSubmit'])->name('careers.submit');



