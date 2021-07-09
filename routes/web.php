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

Route::namespace('Site')->group(function () {
    /* Como criar rotas para colocar nos botões nas views
    *   Adicione:
    *   ->name('site.home');
    */
    Route::get('/', 'HomeController')->name('home');

    Route::get('produtos', 'CategoryController@index')->name('products');

    Route::get('produtos/{slug}','CategoryController@show')->name('products.category');

    Route::get('blog','BlogController')->name('blog');

    Route::view('sobre','site.about.index')->name('about');

    Route::get('contato','ContactController@index')->name('contact');
    Route::post('contato','ContactController@form')->name('contact'); 
}); 