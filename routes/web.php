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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admintrator')->group(function (){
    Route::get('/login', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('dasboard.index');
    Route::post('/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

});
Route::prefix('slidebar')->group(function (){
    Route::resource('admin/post','PostController')->middleware('can:posts.post');
    Route::resource('admin/admin','AdminAccController')->middleware('can:posts.adminaccount');
    Route::resource('admin/role','RoleController')->middleware('can:posts.role');
    Route::resource('admin/permission','PermissionController')->middleware('can:posts.permission');

});


