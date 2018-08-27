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

//Starting page routes
Route::get('/', function () {
    return view('welcome');
});

//Login Routes
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');
//Admin Routes
Route::group(['middleware'=> ['sessad']], function(){
	Route::get('/admin', 'AdminController@index');

	//User Routes

	
	Route::get('/user', 'UserController@index');
	Route::get('/user/{userid}', 'UserController@show');
	Route::get('/user/{userid}/delete', 'UserController@delete');
	Route::delete('/user/{userid}', 'UserController@destroy');
	Route::get('/user/{userid}/edit', 'UserController@edit');
	Route::put('/user/{userid}', 'UserController@update');
	
	Route::post('/user/search', 'UserController@userSearch');
	
	Route::get('/book', 'BookController@index');
	Route::get('/book/create', 'BookController@create');
	Route::post('/book', 'BookController@store');
	Route::get('/book/{bookid}', 'BookController@show');
	Route::get('/book/{bookid}/edit', 'BookController@edit');
	Route::put('/book/{bookid}', 'BookController@update');
	Route::get('/book/{bookid}/delete', 'BookController@delete');
	Route::delete('/book/{bookid}', 'BookController@destroy');
	Route::get('/book/add/{bookid}', 'BookController@add');
	Route::put('/book/add/{bookid}', 'BookController@addCopy');
	Route::post('/book/search', 'BookController@bookSearch');
	Route::get('/borrowreq', 'BorrowController@show');
	Route::post('/borrow/search', 'BorrowController@searchborrowreq');
	Route::get('/borrow/{borrowid}/{userid}/{bookid}', 'BorrowController@destroy1');
	Route::get('/borrowreqaccept/{borrowid}', 'BorrowController@borrowRequestAccept');
	Route::get('/finalborrow', 'BorrowController@finalb');
	Route::get('/return/{borrowid}/{userid}/{bookid}/{reqdate}','BorrowController@returnBook');
	Route::get('/report', 'ReportingController@index');
	Route::get('/report/hbb', 'ReportingController@highestBorrowedBook');
});

Route::group(['middleware'=> ['sessus']], function(){
	Route::post('/booksearchbyuser', 'UserController@bookSearch');
	Route::get('/usermain', 'UserController@mainpage');
	Route::get('/userbook', 'UserController@showBookList');
	Route::get('/borrow/{bookid}/{userid}', 'BorrowController@borrowStore');
	Route::get('/borrow/{userid}', 'BorrowController@get');
	Route::get('/borrow/{borrowid}/{userid}/{bookid}/delete', 'BorrowController@destroy');
	//Route::get('/borrowreq/status/{userid}', 'BorrowController@borrowRequestStatusUser' );
	Route::get('/borrowrequestacceptuser/{userid}','BorrowController@acceptedBooklistToUser');
});

//Route::resource('/book', 'BookController');

Route::get('/logout/admin', 'LogoutController@adminLogout');
Route::get('/logout/user', 'LogoutController@userLogout');



