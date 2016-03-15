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
Route::controller('auth', 'Auth\AuthController');
Route::group(array('before'=>'auth'),function(){
	Route::controller('dashboard', 'Dashboard\DashboardController');
	Route::resource('categories', 'Dashboard\CategoryController');
	Route::resource('content', 'Dashboard\ContentController');
	Route::resource('tinh', 'Dashboard\TinhController');
	Route::resource('huyen', 'Dashboard\HuyenController');
	Route::resource('xa', 'Dashboard\XaController');
	Route::resource('ap', 'Dashboard\ApController');
	Route::resource('tongiao', 'Dashboard\TongiaoController');
	Route::resource('doituong', 'Dashboard\DoituongController');
	Route::resource('kvut', 'Dashboard\KvutController');
	Route::resource('diemkk', 'Dashboard\DiemkkController');
	Route::resource('hanhkiem', 'Dashboard\HanhkiemController');
	Route::resource('hocluc', 'Dashboard\HoclucController');
	Route::resource('thisinh', 'Dashboard\ThisinhController');
	Route::resource('dantoc', 'Dashboard\DantocController');
	Route::resource('dangky', 'Dashboard\DangkyController');
	Route::resource('truongthpt', 'Dashboard\TruongthptController');
	Route::resource('cumthi', 'Dashboard\CumthiController');
	Route::resource('hoidong', 'Dashboard\HoidongController');
	Route::resource('phong', 'Dashboard\PhongController');
	Route::resource('monhoc', 'Dashboard\MonhocController');
	Route::resource('duthi', 'Dashboard\DuthiController');
	Route::resource('canbo', 'Dashboard\CanboController');
	Route::resource('thamgia', 'Dashboard\ThamgiaController');
	Route::resource('chucdanh', 'Dashboard\ChucdanhController');
	Route::resource('nam', 'Dashboard\NamController');
	Route::resource('buoi', 'Dashboard\BuoiController');
	Route::resource('ngay', 'Dashboard\NgayController');
	Route::resource('lichthi', 'Dashboard\LichthiController');
	Route::resource('hinhthucthi', 'Dashboard\HinhthucthiController');
	Route::resource('lichgacthi', 'Dashboard\LichgacthiController');
});
Route::get('/test', function(){
	print_r(Auth::user()['name']);
});
Route::controller('/', 'Guest\HomeController');
