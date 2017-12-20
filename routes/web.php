<?php
Route::post('/request', [
	'as' => 'request', 'uses' => 'PagesController@request'
]);
Route::post('/userStore', [
	'as' => 'userStore', 'uses' => 'UserController@store'
]);
Route::post('/storeBook', [
	'as' => 'storeBook', 'uses' => 'BookController@store'
]);
Route::post('/sotreRequestedBook', [
	'as' => 'storeRequestedBook', 'uses' => 'RequestedBookController@store'
]);
Route::post('/book_settings', [
	'as' => 'book_settings', 'uses' => 'BookController@book_settings'
]);
Route::post('/book_settings_update', [
	'as' => 'book_settings_update', 'uses' => 'BookController@book_configuration_update'
]);
Route::post('/requestBorrow', [
	'as' => 'requestBorrow', 'uses' => 'BookController@requestBorrow'
]);

Route::get('/deleteUser/{id}','UserController@destroy');
Route::get('/approveUser/{id}','UserController@approveUser');
Route::get('/deletebook/{id}','BookController@destroy');
 
Route::group(["middleware" => ['guest']], function () {

	Route::get('/', [
		'as' => 'home', 'uses' => 'PagesController@home'
	]);
	Route::get('/home', [
		'as' => 'home', 'uses' => 'PagesController@home'
	]);
	Route::get('/about', [
		'as' => 'about', 'uses' => 'PagesController@about'
	]);
	Route::get('/bookSearchByGuest', [
		'as' => 'bookSearchByGuest', 'uses' => 'PagesController@home'
	]);
});

Route::group(["middleware" => ['auth', 'admin']], function () {

	Route::get('/homeAdmin', [
		'as' => 'homeAdmin', 'uses' => 'PagesController@homeAdmin'
	]);
	Route::get('/account_approval', [
		'as' => 'account_approval', 'uses' => 'PagesController@account_approval'
	]);
	Route::get('/book_settings', [
		'as' => 'book_settings', 'uses' => 'BookController@book_configuration'
	]);
	Route::get('/book_settings_update', [
		'as' => 'book_settings_update', 'uses' => 'PagesController@book_settings_update'
	]);
	Route::get('/requestApproval', [
		'as' => 'requestApproval', 'uses' => 'PagesController@requestApproval'
	]);
	Route::get('/add_user', [
		'as' => 'add_user', 'uses' => 'UserController@create'
	]);
	Route::get('/deleteUser', [
		'as' => 'deleteUser', 'uses' => 'UserController@index'
	]);

});

Route::group(["middleware" => ['auth', 'librarian']], function () {

	Route::get('/homeLibrarian', [
		'as' => 'homeLibrarian', 'uses' => 'PagesController@homeLibrarian'
	]);
	Route::get('/searchBookByLibrarian', [
		'as' => 'searchBookByLibrarian', 'uses' => 'PagesController@homeLibrarian'
	]);

	Route::get('/book_return_approval', [
		'as' => 'book_return_approval', 'uses' => 'PagesController@book_return_approval'
	]);

	
	Route::get('/book_remark_approval', [
		'as' => 'book_remark_approval', 'uses' => 'BookController@book_remark_approval'
	]);
	Route::get('/approveRemarkRequest/{id}', [
		'as' => 'approveRemarkRequest', 'uses' => 'BookController@approveRemark'
	]);
	Route::get('/declineRemarkRequest/{id}', [
		'as' => 'declineRemarkRequest', 'uses' => 'BookController@rejectRemark'
	]);



	Route::get('/issued_book_list', [
		'as' => 'issued_book_list', 'uses' => 'IssueController@issued_list'
	]);

	Route::get('/time_extension_approval', [
		'as' => 'time_extension_approval', 'uses' => 'IssueController@time_extension_approval'
	]);
	
	Route::get('/book_issue_approval', [
		'as' => 'book_issue_approval', 'uses' => 'IssueController@book_issue_approval'
	]);

	Route::get('/new_book_request', [
		'as' => 'new_book_request', 'uses' => 'RequestedBookController@book_request'
	]);
	Route::get('/manageBook', [
		'as' => 'manageBook', 'uses' => 'BookController@index'
	]);
	Route::get('/add_book', [
		'as' => 'add_book', 'uses' => 'BookController@create'
	]);
	Route::get('/editBook/{id}', [
		'as' => 'editBook', 'uses' => 'BookController@edit'
	]);
	Route::post('/updateBook/{id}', [
		'as' => 'updateBook', 'uses' => 'BookController@update'
	]);
	Route::get('/declineBorrowRequest/{id}', [
		'as' => 'declineBorrowRequest', 'uses' => 'IssueController@rejectBorrowRequest'
	]);
	Route::get('/approveBorrowRequest/{id}', [
		'as' => 'approveBorrowRequest', 'uses' => 'IssueController@acceptBorrowRequest'
	]);
	Route::get('/approveExtensionRequest/{id}', [
		'as' => 'approveExtensionRequest', 'uses' => 'IssueController@acceptExtensionRequest'
	]);

	Route::get('/declineExtensionRequest/{id}', [
		'as' => 'declineExtensionRequest', 'uses' => 'IssueController@rejectExtensionRequest'
	]);

	Route::get('/approvereturnbook/{id}', [
		'as' => 'approvereturnbook', 'uses' => 'IssueController@approveReturn'
	]);
});








Route::group(["middleware" => ['auth', ('teacher'||'student')]] , function () {

	Route::get('/homeUser', [
		'as' => 'homeUser', 'uses' => 'PagesController@homeUser'
	]);
	Route::post('/searchBookByUser',[ 
	 	'as' => 'searchBookByUser', 'uses'=> 'PagesController@homeUser' 
	]);	
	Route::get('/requestBorrow/{id}', [
		'as' => 'requestBorrow', 'uses' => 'BookController@requestBorrow'
	]);
	Route::get('/borrow_book/{id}', [
		'as' => 'borrow_book', 'uses' => 'BookController@borrow_book'
	]);


	Route::get('/remark_book', [
		'as' => 'remark_book', 'uses' => 'BookController@remark'
	]);
	Route::post('/remarkSave/{id}', [
		'as' => 'remarkSave', 'uses' => 'BookController@saveRemark'
	]);


	Route::get('/extend_time', [
		'as' => 'extend_time', 'uses' => 'IssueController@extend_time'
	]);
	Route::post('/extendTime','IssueController@requestExtraTime')->name('extendTime');


	Route::post('/searchBookforReserve',[ 
	 	'as' => 'searchBookforReserve', 'uses'=> 'PagesController@searchForReserve' 
	]);
	Route::get('/reserveBook',[ 
	 	'as' => 'reserveBook', 'uses'=> 'PagesController@searchForReserve' 
	]);
	Route::get('/reserve_request/{id}',[ 
	 	'as' => 'reserve_request', 'uses'=> 'BookController@reserve_request' 
	]);
	Route::get('/reserve/{id}', [
		'as' => 'reserve', 'uses' => 'BookController@reserve'
	]);


	Route::get('/request_new_book', [
		'as' => 'request_new_book', 'uses' => 'PagesController@request_new_book'
	]);
	Route::get('/requestBook', [
		'as' => 'requestBook', 'uses' => 'RequestedBookController@create'
	]);
	

	Route::get('/borrowed_book_list', [
		'as' => 'borrowed_book_list', 'uses' => 'IssueController@borrowed_list'
	]);
	/*Route::get('/cancelRequest/{id}', [
		'as' => 'cancelRequest', 'uses' => 'IssueController@decline'
	]);*/
});
Auth::routes();

