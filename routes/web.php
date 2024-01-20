<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use Dotenv\Loader\Loader;
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

Route::pattern('id', '[0-9]+');

Route::get('/','PagesController@home');
Route::get('/author','PagesController@author');
Route::get('/contact','ContactController@page');


Route::get('/login','AuthenticationController@page');
Route::post('/login','AuthenticationController@login');
Route::get("/logout",'AuthenticationController@logout')->middleware(["isLoggedIn"]);

Route::post('/registration','AuthenticationController@registration');

//Route::get('/user','UserController@page')->middleware(["isLoggedIn"]);

Route::post('/reservation','ReservationController@insertReservation');

Route::post('/contact','ContactController@insertContact');

Route::get('/print-ajax-products','ProductsController@printAjaxProducts');

Route::prefix('/user')->middleware(["isLoggedIn"])->group(function(){
    Route::get('/','UserController@page');
    Route::post('/updateUserPassword', 'UserController@updatePassword');
    Route::post('/updateUserInfo','UserController@updateUserInfo');
});

Route::prefix('/products')->group(function(){
    Route::get('/','ProductsController@page');
    Route::get('/fetch_data', 'ProductsController@fetch_data');
    Route::get('/{id}','ProductsController@oneProduct');
});

Route::prefix('/news')->group(function(){
    Route::get('/','NewsController@page');
    Route::get('/{id}','NewsController@oneNews');

});

Route::prefix('/admin')->middleware(["isLoggedIn","AdminMiddleware"])->group(function(){

    Route::get('/','Admin\ContactController@getContact');

    Route::prefix('/contact')->group(function(){

        Route::get('/','Admin\ContactController@getContact');
        Route::delete('/deleteContact/{id}','Admin\ContactController@deleteContact');
        Route::get('/ajaxContact','Admin\ContactController@getAjaxContact');

    });

    Route::prefix('/products')->group(function(){

        Route::get('/','Admin\ProductsController@getProducts');
        Route::delete('/deleteProduct/{id}','Admin\ProductsController@deleteProduct');
        Route::get('/ajaxProducts','Admin\ProductsController@getAjaxProducts');
        Route::get('/form-products','Admin\ProductsController@formProducts');
        Route::post('/insertProducts','Admin\ProductsController@insertProducts');
        Route::get('edit/{id}', "Admin\ProductsController@editProductInfo");
        Route::post('edit/updateProduct', "Admin\ProductsController@updateProduct");
        Route::get('/fetch_data', "Admin\ProductsController@fetch_data");
    });

    Route::prefix('/user')->group(function(){

        Route::get('/','Admin\UserController@getUser');
        Route::delete('/deleteUser/{id}','Admin\UserController@deleteUser');
        Route::get('/ajaxUsers','Admin\UserController@getAjaxUsers');
        Route::get('/form-user','Admin\UserController@formUser');
        Route::post('/insertUser','Admin\UserController@insertUser');
        Route::get('edit/{id}', "Admin\UserController@editUserInfo");
        Route::post('edit/updateUser', "Admin\UserController@updateUser");

    });

    Route::prefix('/reservation')->group(function(){

        Route::get('/','Admin\ReservationController@getReservation');
        Route::delete('/deleteReservation/{id}','Admin\ReservationController@deleteReservation');
        Route::get('/ajaxReservation','Admin\ReservationController@getAjaxReservation');
        Route::get('edit/{id}', "Admin\ReservationController@editStatusInfo");
        Route::post('edit/updateReservation', "Admin\ReservationController@updateStatus");

    });

    Route::prefix('/activity')->group(function(){

        Route::get('/user','Admin\UserActivityController@userActivity');
        Route::get('/user/fetch_data', 'Admin\UserActivityController@fetch_data');


    });

    Route::prefix('/news')->group(function(){

        Route::get('/','Admin\NewsController@getNews');
        Route::get('/form-news', 'Admin\NewsController@getForm');
        Route::post('/insertNews','Admin\NewsController@insertNews');
        Route::get('edit/{id}', "Admin\NewsController@formNews");
        Route::post('edit/updateNews', "Admin\NewsController@updateNews");
        Route::delete('/deleteNews/{id}','Admin\NewsController@deleteNews');
        Route::get('/ajaxNews','Admin\NewsController@getAjaxNews');

    });


});





