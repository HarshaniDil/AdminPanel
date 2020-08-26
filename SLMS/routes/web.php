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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('Homepage');
});

Route::get('/lol', function () {
    return view('Lol');
});

Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile','UploadfileController@upload');
Route::get('/main','AdminController@index');
Route::POST('/main/checklogin','AdminController@checklogin');
Route::get('/main/AdminPanel','AdminController@AdminPanel');
Route::get('/main/logout','AdminController@logout');


Route::resource('main/Department','DepartmentController');
Route::resource('main/Head','HeadController');
Route::resource('main/Employee','EmployeeController');
Route::resource('main/Leaveinfor','LeaveinforController');
Route::get('main/Comment','paginationController@index');
Route::resource('main/Comment1','AllcommentController');

Route::get('/Home/emp','HomeController@index');
Route::POST('/Home/emp/checklogin','HomeController@checklogin');
Route::get('/Home/emp/EmpProfile','HomeController@EmpProfile');
Route::get('/Home/emp/logout','HomeController@logout');

Route::get('/Home/emp/EmpProfile/MyProfile','HomeController@ShowMyProfile');
Route::get('/Home/emp/EmpProfile/ApplyLeaves','HomeController@ShowLeaveForm');