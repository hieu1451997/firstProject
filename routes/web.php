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

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);
Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSP'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);

Route::get('checkout',[
	'as'=>'checkout',
	'uses'=>'PageController@getCheckout'
]);

Route::post('checkout',[
	'as'=>'checkout',
	'uses'=>'PageController@postCheckout'
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioithieu'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienhe'
]);
Route::post('dang-ki',[
	'as'=>'singin',
	'uses'=>'PageController@postSingin'
]);

Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);







//Admin
Route::get('admin',[
	'as'=>'admin',
	'uses'=>'AdminController@getAdmin'
]);

Route::get('n-s-x',[
	'as'=>'nsx',
	'uses'=>'AdminController@getNSX'
]);

Route::get('danh-sach-san-pham',[
	'as'=>'danhsachsanpham',
	'uses'=>'AdminController@getDSSP'
]);

Route::get('danh-sach-khach-hang',[
	'as'=>'danhsachkhachhang',
	'uses'=>'AdminController@getDSKH'
]);

Route::get('danh-sach-hoa-don',[
	'as'=>'danhsachhoadon',
	'uses'=>'AdminController@getDSHD'
]);

Route::get('danh-sach-slide',[
	'as'=>'danhsachslide',
	'uses'=>'AdminController@getDSSlide'
]);

Route::get('danh-sach-tai-khoan',[
	'as'=>'danhsachtaikhoan',
	'uses'=>'AdminController@getDSTK'
]);

Route::get('them-mon-the-thao',[
	'as'=>'themmonthethao',
	'uses'=>'AdminController@getThemMTT'
]);
Route::post('them-mon-the-thao',[
	'as'=>'themmonthethao',
	'uses'=>'AdminController@postThemMTT'
]);

Route::get('them-nha-san-xuat',[
	'as'=>'themnsx',
	'uses'=>'AdminController@getThemNSX'
]);
Route::post('them-nha-san-xuat',[
	'as'=>'themnsx',
	'uses'=>'AdminController@postThemNSX'
]);

Route::get('them-san-pham',[
	'as'=>'themsanpham',
	'uses'=>'AdminController@getThemSP'
]);
Route::post('them-san-pham',[
	'as'=>'themsanpham',
	'uses'=>'AdminController@postThemSP'
]);

Route::get('sua-mon-the-thao/{id}',[
	'as'=>'suamonthethao',
	'uses'=>'AdminController@getSuaMTT'
]);
Route::post('sua-mon-the-thao/{id}',[
	'as'=>'suamonthethao',
	'uses'=>'AdminController@postSuaMTT'
]);

Route::get('xoa-mon-the-thao/{id}',[
	'as'=>'xoamonthethao',
	'uses'=>'AdminController@getXoaMTT'
]);




