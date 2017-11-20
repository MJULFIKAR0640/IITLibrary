<?php


Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
]);

Route::post('/request', [
	'as' => 'request', 
	'uses' => 'PagesController@request'
]);


Route::group(["middleware" => ['auth', 'admin']], function () {

	Route::get('/homeAdmin', [
	'as' => 'homeAdmin',
	'uses' => 'PagesController@homeAdmin'
	]);

	Route::get('/account_approval', [
		'as' => 'account_approval',
		'uses' => 'PagesController@account_approval'
	]);

});

Route::group(["middleware" => ['auth', ('teacher'||'student')]] , function () {

	Route::get('/homeUser', [
	'as' => 'homeUser',
	'uses' => 'PagesController@homeUser'
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

	Route::get('/reserve_book', [
		'as' => 'reserve_book',
		'uses' => 'PagesController@reserve_book'
	]);

	Route::get('/requestBook', [
	'as' => 'requestBook',
	'uses' => 'RequestedBookController@create'
	]);

	Route::post('/sotreRequestedBook', [
	'as' => 'storeRequestedBook',
	'uses' => 'RequestedBookController@store'
	]);
});

/*Route::group(["middleware" => ['auth','student']], function () {

    Route::get('/homeStudent', [
	'as' => 'homeStudent',
	'uses' => 'PagesController@homeStudent'
	]);

	Route::get('/request_new_book', [
	'as' => 'request_new_book',
	'uses' => 'PagesController@request_new_book'
	]);

	Route::get('/remark_book', [
		'as' => 'remark_book',
		'uses' => 'PagesController@remark_book'
	]);

	Route::get('/return_book', [
	'as' => 'return_book',
	'uses' => 'PagesController@reserve_book'
	]);

	Route::get('/reserve_book', [
		'as' => 'reserve_book',
		'uses' => 'PagesController@reserve_book'
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

	Route::get('/requestBook', [
	'as' => 'requestBook',
	'uses' => 'RequestedBookController@create'
	]);

	Route::post('/sotreRequestedBook', [
	'as' => 'storeRequestedBook',
	'uses' => 'RequestedBookController@store'
	]);
});*/

Route::group(["middleware" => ['auth', 'librarian']], function () {

	Route::get('/homeLibrarian', [
	'as' => 'homeLibrarian',
	'uses' => 'PagesController@homeLibrarian'
	]);

	Route::get('/book_return_approval', [
	'as' => 'book_return_approval',
	'uses' => 'PagesController@book_return_approval'
	]);

	Route::get('/book_remark_approval', [
	'as' => 'book_remark_approval',
	'uses' => 'PagesController@book_remark_approval'
	]);

	Route::get('/bookSearch', [
	'as' => 'bookSearch',
	'uses' => 'PagesController@book_search'
	]);

	Route::get('/issued_book_list', [
		'as' => 'issued_book_list',
		'uses' => 'PagesController@issued_book_list'
	]);

	Route::get('/manage_book', [
	'as' => 'manage_book',
	'uses' => 'PagesController@manage_book'
	]);

	Route::get('/time_extension_approval', [
		'as' => 'time_extension_approval',
		'uses' => 'PagesController@time_extension_approval'
	]);
	
	Route::get('/book_issue_approval', [
	'as' => 'book_issue_approval',
	'uses' => 'PagesController@book_issue_approval'
	]);

	Route::get('/new_book_request', [
	'as' => 'new_book_request',
	'uses' => 'PagesController@new_book_request'
	]);

	Route::get('/add_book', [
	'as' => 'add_book',
	'uses' => 'BookController@create'
	]);

	Route::post('/storeBook', [
	'as' => 'storeBook',
	'uses' => 'BookController@store'
	]);
});

Auth::routes();
