<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	
    return view('index');
});
Route::group(['prefix' => 'admin'], function () {          
    Route::get('/login', 'backend\Auth\LoginController@getLoginForm');
    Route::post('/authenticate', 'backend\Auth\LoginController@authenticate');    
    Route::get('/register', 'backend\Auth\RegisterController@getRegisterForm');
    Route::post('/saveregister', 'backend\Auth\RegisterController@saveRegisterForm');
    Route::get('/dashboard', 'backend\AdminController@dashboard');
    Route::any('/profile', 'backend\AdminController@profile');
    Route::any('/view-enquiry', 'backend\AdminController@viewEnquiry');
    Route::any('/enquiry', 'backend\AdminController@enquiry');
    Route::any('/add-portfolio', 'backend\AdminController@addPortfolio');
    Route::any('/logout', 'backend\Auth\LoginController@getLogout');
    Route::get('/', 'backend\AdminController@dashboard');  
    Route::any('/fileupload','backend\AdminController@fileupload');
    Route::any('/sorting','backend\AdminController@sorting');
    

    Route::any('/example', 'backend\AdminController@example');   
    Route::any('/add-homepage-text', 'backend\AdminController@addHomepageText');   
    Route::any('/edit-homepage-text', 'backend\AdminController@editHomepageText');   
    Route::any('/view-homepage-text', 'backend\AdminController@viewHomepageText'); 
    Route::any('/category/add','backend\CategoryController@add');
    Route::any('/category/view','backend\CategoryController@view');
    Route::any('/category/edit/{id}','backend\CategoryController@edit');
    Route::any('/product/add','backend\ProductController@add');
    Route::any('/product/view','backend\ProductController@view');
    Route::any('/product/edit/{id}','backend\ProductController@edit');

});

Route::group(['prefix' => 'user'], function ()
 {
 	Route::get('/login', 'frontend\Auth\LoginController@getLoginForm');
    Route::post('/authenticate', 'frontend\Auth\LoginController@authenticate');    
    Route::get('/register', 'frontend\Auth\RegisterController@getRegisterForm');
    Route::post('/saveregister', 'frontend\Auth\RegisterController@saveRegisterForm');
    Route::post('/logout', 'frontend\Auth\LoginController@getLogout');
    Route::get('/dashboard', 'frontend\UserController@dashboard');

  });

Route::get('users',['uses'=>'UsersController@index']);
Route::get('users/create',['uses'=>'UsersController@create']);
Route::post('users',['uses'=>'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index');
