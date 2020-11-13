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

Route::get('/','Index\IndexController@index');//首页
Route::get('/login','Index\LoginController@login');//登录页面
Route::get('/register','Index\LoginController@reg');//注册页面
Route::get('/login/regdo','Index\LoginController@regdo');//注册方法
Route::get('login/logindo','Index\LoginController@logindo');//登录方法
Route::get('search','Index\SearchController@search');//列表页
Route::get('seckill/{goods_id}','Index\SearchController@seckill');//商品详情页
Route::get('/outlogin','Index\LoginController@outlogin');//退出登录
Route::get('/active','Index\LoginController@active');//
Route::get('/cartdo','Index\CartController@cartdo');
Route::get('/cart','Index\CartController@cart');//购物车
Route::get('/fav1','Index\CartController@fav1');//商品收藏
Route::get('/ement','Index\EmentController@ement');//地址
Route::get('/pay','Index\EmentController@pay');//结算
Route::get('/getsonaddress','Index\EmentController@getsonaddress');//结算
Route::get('/useraddressadd','Index\EmentController@useraddressadd');//结算

Route::get('/prize','Index\PrizeController@index');//抽奖
Route::get('/prize/start','Index\PrizeController@start');//开始抽奖


Route::get('/movies','Index\MoviesController@index');//电影院购票

Route::get('/movies/save','Index\MoviesController@save');//开始抽奖








