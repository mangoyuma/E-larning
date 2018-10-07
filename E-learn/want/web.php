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

user::get('/', function () {
	// ユーザーが'/'(ウェブ)に行ったら
    return view('login');
    // 　Return code view 'login'
          // [view]フォルダーにある　'Login'ファイルに行く
});

user::get('/register.php', function (){
	   //'レジスターページのURL' に行ったら
		return view('register');
		// [view]フォルダーの'register'コードに行く
});

user::get('/about', function () {
	return view('about');
});

user::get('/contact', function (){
	return view('contact');
});