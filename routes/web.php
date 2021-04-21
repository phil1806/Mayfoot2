<?php

use Illuminate\Support\Facades\Route;



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

//  ROUTES CONTZCT------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE DE CONTACT
  PATTERN: /contact
  CTRL: --//--
  ACTION:--//-- 
*/
Route::view('contact','pages.contact')->name('page.contact');

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
  CTRL: --//--
  ACTION:--//-- 
*/
Route::view('/blog','pages.blog.index')->name('page.blog.index');



//  ROUTES DETAILS BLOG------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE DU BLOG
  PATTERN: /details/id/slug.html
  CTRL: --//--
  ACTION:--//-- 
*/
Route::view('/details','pages.blog.show')->name('page.blog.show');


