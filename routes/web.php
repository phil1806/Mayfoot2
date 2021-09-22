<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\newsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\realisationsController;



/*
|--------------------------------------------------------------------------
|                               WEB ROUTES
|--------------------------------------------------------------------------
*/



//  ROUTES ACCUEUIL ------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE D'ACCUEIL
  PATTERN: /
  CTRL: --//--
  ACTION:--//--
*/
Route::view('/','pages.accueil')->name('page.accueil');



//  ROUTES NOS SOINS------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE DE CONTACT
  PATTERN: /contact
  CTRL: --//--
  ACTION:--//--
*/
Route::view('soins','pages.soins')->name('page.soins');

//  ROUTES AUTRE SERVICES------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE DE CONTACT
  PATTERN: /services
  CTRL: --//--
  ACTION:--//--
*/
Route::view('autreServices','pages.autreServices')->name('page.services');


//  ROUTES BLOG ------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE DU BLOG
  PATTERN: /blog
  CTRL: newsController
  ACTION: index
*/

Route::get('/blog',[newsController::class, 'index'])->name('blog.index');



//  ROUTES DETAILS BLOG------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE DU BLOG
  PATTERN: /details/id/slug.html
  CTRL: newsController
  ACTION:show
*/

Route::get('blog/{id}/{slug}.html',[newsController::class, 'show'])->name('blog.show');



//  ROUTES REALISATION ------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE DES REALISATIONS
  PATTERN: /realisations
  CTRL: realisationsController
  ACTION: index
*/
Route::get('/realisation',[realisationsController::class, 'index'])->name('realisations.index');


//  ROUTES CONTACT ------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE DES REALISATIONS
  PATTERN: /contact
  CTRL: ContactCotroller
  ACTION: create
*/
Route::get('contact',[ContactController::class, 'create'])->name('page.contact');
Route::post('contact',[ContactController::class, 'store']);


//  ROUTES CACHE  ------------------------------------------------------------
/*
  DESC: PERMET DE  VIDER LA CACHE
  PATTERN: /clear-cache
  CTRL:
  ACTION: vide la cache en ligne
*/
Route::get('/clear-cache', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        return 'FINISHED';
});





