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

//  Route::get('/', function () {
//     return view('/login');
// });
Route::get('dangnhap', 'LoginController@getDangNhap');
Route::post('dangnhap', 'LoginController@postDangNhap')->name('pages');
Route::get('dangxuat','LoginController@dangxuat');


// Route::get ('password/lost','ForgotPasswordController@forgotPassword');

// Auth::routes();
// Route::get ('dashboard', 'DashboardController@index');
// Route::get ('changepassword', 'UserController@changepassword');
// Route::post('updatepassword','UserController@updatePassword');
// Route::get ('profile', 'UserController@profile');
// Route::resource ('pages', 'PagesController');
// Route::get ('pages', function(){
//     return view('/pages.index');
// });
// Route::post ('update/{user_id}', 'UserController@updateprofile');
// Route::post('changePassword/{user_id}','UserController@updatePassword')->name('changePassword');
// Route::get ('user/profile', 'UserController@profile');
// Route::get ('main/logout', 'MainController@logout');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'qlcv'],function(){

	Route::group(['prefix'=>'theloai'],function(){
		//admin/theloai/them
		Route::get('danhsach','TheLoaiController@getDanhSach');
		
		Route::get('sua/{id}','TheLoaiController@getSua');
		Route::post('sua/{id}','TheloaiController@postSua');
		
		Route::get('them','TheLoaiController@getThem');
		Route::post('them','TheLoaiController@postThem');

		Route::get('xoa/{id}','TheLoaiController@getXoa');
		
    });
}
