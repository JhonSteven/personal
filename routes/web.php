<?php

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
/**************  WEB   *************************/
Route::get('/', 'WebController@getHome')->name('home');

/**************  PARRATAGS   *************************/
Route::get('/herramienta-seo-gratis', 'SeotagsController@getPageSEOTags')->name('parratags');
Route::post('/parratags', 'SeotagsController@getTags');
