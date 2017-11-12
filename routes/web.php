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


Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/home', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
]);

Route::get('/manage_book', [
	'as' => 'manage_book',
	'uses' => 'PagesController@manage_book'
]);

Route::get('/time_extension_approval', [
	'as' => 'time_extension_approval',
	'uses' => 'PagesController@time_extension_approval'
]);

Route::get('/request_new_book', [
	'as' => 'request_new_book',
	'uses' => 'PagesController@request_new_book'
]);

Route::get('/remark_book', [
	'as' => 'remark_book',
	'uses' => 'PagesController@remark_book'
]);

Route::get('/return_or_remark_book', [
	'as' => 'return_or_remark_book',
	'uses' => 'PagesController@return_or_remark_book'
]);

Route::get('/extend_time', [
	'as' => 'extend_time',
	'uses' => 'PagesController@extend_time'
]);

Route::get('/borrow_book', [
	'as' => 'borrow_book',
	'uses' => 'PagesController@borrow_book'
]);

Route::get('/account_approval', [
	'as' => 'account_approval',
	'uses' => 'PagesController@account_approval'
]);

Route::get('/book_issue_approval', [
	'as' => 'book_issue_approval',
	'uses' => 'PagesController@book_issue_approval'
]);

Route::get('/book_return_approval', [
	'as' => 'book_return_approval',
	'uses' => 'PagesController@book_return_approval'
]);

Route::get('/book_remark_approval', [
	'as' => 'book_remark_approval',
	'uses' => 'PagesController@book_remark_approval'
]);

Route::get('/issued_book_list', [
	'as' => 'issued_book_list',
	'uses' => 'PagesController@issued_book_list'
]);

Route::get('/new_book_request', [
	'as' => 'new_book_request',
	'uses' => 'PagesController@new_book_request'
]);

Route::get('/add_book', [
	'as' => 'add_book',
	'uses' => 'PagesController@add_book'
]);

Route::post('/store', [
	'as' => 'store',
	'uses' => 'PagesController@store'
]);

Route::post('/request', [
	'as' => 'request',
	'uses' => 'PagesController@request'
]);




	




Auth::routes();

Route::post('user/register', ['as' => 'user_register', 'uses' => 'RegisterController@register']);


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
