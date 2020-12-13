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

Route::get('/','App\Http\Controllers\WelcomeController@index');
//    return view('welcome');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin']], function (){

//    Route::get('/dashboard', function () {
//        return view('admin.dashboard');
//    });
    Route::get('/dashboard', 'App\Http\Controllers\AdminControllers\DashboardController@main');

    Route::get('/role-register', 'App\Http\Controllers\AdminControllers\DashboardController@registered');

    Route::get('/role-edit/{id}', 'App\Http\Controllers\AdminControllers\DashboardController@registeredit');
    Route::put('role-register-update/{id}', 'App\Http\Controllers\AdminControllers\DashboardController@registerupdate');

    Route::delete('/role-delete/{id}', 'App\Http\Controllers\AdminControllers\DashboardController@registerdelete');


    Route::get('/products', 'App\Http\Controllers\AdminControllers\ProductsController@index');

    Route::get('/product', 'App\Http\Controllers\AdminControllers\ProductsController@product');
    Route::post('/product-add','App\Http\Controllers\AdminControllers\ProductsController@add')->name('product-add');

    Route::get('/product-edit/{id}','App\Http\Controllers\AdminControllers\ProductsController@edit');
    Route::put('product-update/{id}','App\Http\Controllers\AdminControllers\ProductsController@update')->name('product-update');

    Route::delete('/product-delete/{id}', 'App\Http\Controllers\AdminControllers\ProductsController@delete');


    Route::get('/sliders', 'App\Http\Controllers\AdminControllers\SlidersController@index');

    Route::get('/slider', 'App\Http\Controllers\AdminControllers\SlidersController@slider');
    Route::post('/slider-add','App\Http\Controllers\AdminControllers\SlidersController@add')->name('slider-add');

    Route::get('/slider-edit/{id}','App\Http\Controllers\AdminControllers\SlidersController@edit');
    Route::put('slider-update/{id}','App\Http\Controllers\AdminControllers\SlidersController@update')->name('slider-update');

    Route::delete('/slider-delete/{id}', 'App\Http\Controllers\AdminControllers\SlidersController@delete');


    Route::get('/offers', 'App\Http\Controllers\AdminControllers\OffersController@index');

    Route::get('/offer', 'App\Http\Controllers\AdminControllers\OffersController@offer');
    Route::post('/offer-add','App\Http\Controllers\AdminControllers\OffersController@add')->name('offer-add');

    Route::get('/offer-edit/{id}','App\Http\Controllers\AdminControllers\OffersController@edit');
    Route::put('offer-update/{id}','App\Http\Controllers\AdminControllers\OffersController@update')->name('offer-update');

    Route::delete('/offer-delete/{id}', 'App\Http\Controllers\AdminControllers\OffersController@delete');



    Route::get('/suggestions', 'App\Http\Controllers\AdminControllers\SuggestionsController@index');

    Route::get('/suggestion', 'App\Http\Controllers\AdminControllers\SuggestionsController@suggestion');
    Route::post('/suggestion-add','App\Http\Controllers\AdminControllers\SuggestionsController@add')->name('suggestion-add');

    Route::get('/suggestion-edit/{id}','App\Http\Controllers\AdminControllers\SuggestionsController@edit');
    Route::put('suggestion-update/{id}','App\Http\Controllers\AdminControllers\SuggestionsController@update')->name('suggestion-update');

    Route::delete('/suggestion-delete/{id}', 'App\Http\Controllers\AdminControllers\SuggestionsController@delete');



    Route::get('/images', 'App\Http\Controllers\AdminControllers\ImagesController@index');

    Route::get('/image', 'App\Http\Controllers\AdminControllers\ImagesController@image');
    Route::post('/image-add','App\Http\Controllers\AdminControllers\ImagesController@add')->name('image-add');

    Route::get('/image-edit/{id}','App\Http\Controllers\AdminControllers\ImagesController@edit');
    Route::put('image-update/{id}','App\Http\Controllers\AdminControllers\ImagesController@update')->name('image-update');

    Route::delete('/image-delete/{id}', 'App\Http\Controllers\AdminControllers\ImagesController@delete');



});


