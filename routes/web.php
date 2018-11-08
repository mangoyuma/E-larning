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
*/Route::get('/', function () {
      return view('Welcome');
  });

Route::get('/about', function () {//about.blade.php 
  $bitfumes = ['This','is','bitfumes'];
     return view('about',['bitfumes'=>$bitfumes]); 
  // return view('about')->withBitfumes($bitfumes); 
  // return view('about',compact('bitfumes')); Line: 17,18,19 Same Way

  // about.blade.php に　['This','is','bitfumes'] が表示される
});


// [Route get Controller]
Route::get('/','PageController@welcome');
Route::get('about','PagesController@about');
Route::resource('songs','SongsController');
// "php artisan make:Controller SongsController --resource"コマンドで CongsControllerに　[@index, @delete, @store]ファンクションが作られる
// "php artisan route:list" コマンドでRoute::resourceのリストが見れる







// [Route, Controller, View and Model]

// Route::get('list','UserController@Userlist')->name('Userlist');

// Route::get('add','UserController@createUser')->name('createUser');

// [Route and Controller]
// Route::get('home', 'HomeController@home')->name('home');

// [Route and View]
//  // URL/home にしたらブラウザーに 'Home.blade.php'が表示
// Route::get('/home', function () {
//       return view('Home');
//     });

// Route::get('/', function () {

// 	$name = 'Mango';

//     $age = 31;

//     $tasks = [
//     	'Go to the store',
//     	'Finish my screencast',
//     	'Clean the house'
//     ];

//     return view('welcome',compact('name', 'age','tasks'));
//     //                              Mango   31　　'Go to the store',
//     // 　　　　　　　　　　　　　　　　　　　　　　	　'Finish my screencast',
//     // 　　　　　　　　　　　　　　　　　　　　　　　 'Clean the house'
// });

// Route::get('/contact', function (){
// 	   //'contactページのURL' に行ったら
// 		return view('contact');
// 		// [view]フォルダーの'contact'コードに行く
// });

// Route::get('/about', function () {
// 	return view('about');
// });