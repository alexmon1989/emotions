<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Marketing\HomeController@index');
Route::get('home', 'Marketing\HomeController@index');

Route::get('admin', ['middleware' => 'auth', 'Admin\DashboardController@getIndex']);

// Роут контроллера авторизации, middleware указан в его конструкторе
Route::controller('admin/auth', 'Admin\Auth\AuthController');

// Группа роутов польз. части
Route::group(['namespace' => 'Marketing'], function()
{
    Route::controllers([
        'about'            => 'AboutController',
        'payments'         => 'PaymentsController',
        'contacts'         => 'ContactsController',
        'products'         => 'ProductsController',
    ]);
});

// Группа роутов админки
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function()
{
    Route::controllers([
        'dashboard'                 => 'DashboardController',
        'slider'                    => 'SliderController',
        'products'                  => 'ProductsController',
        'about'                     => 'AboutController',
        'payments'                  => 'PaymentsController',
        'main-article'              => 'MainArticleController',
        'contacts/info'             => 'ContactsInfoController',
        'contacts/messages'         => 'ContactsMessagesController',
    ]);
});