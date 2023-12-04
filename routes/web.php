<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

//*rotte admin

Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-admin',[AdminController::class,'setAdmin'])->name('admin.setAdmin');
    Route::get('/admin/{user}/set-revisor',[AdminController::class,'setRevisor'])->name('admin.setRevisor');
    Route::get('/admin/{user}/set-writer',[AdminController::class,'setWriter'])->name('admin.setWriter');
});

//rotte revisor

Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard',[RevisorController::class,'dashboard'])->name('revisor.dashboard');
    Route::get('/revisor/{article}/accept',[RevisorController::class,'acceptArticle'])->name('revisor.acceptArticle');
    Route::get('/revisor/{article}/reject',[RevisorController::class,'rejectArticle'])->name('revisor.rejectArticle');
    Route::get('/revisor/{article}/undo',[RevisorController::class,'undoArticle'])->name('revisor.undoArticle');

});



