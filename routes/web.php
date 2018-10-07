<?php
namespace web;
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
  $name = 'Yuma Ito';

  $aga = 22;

  $tasks = [

  	 'I learn PHP',

  	 'In framgia',

  	 'From japan'
  	];

   return view('welcome', compact('mame', 'age', 'tasks'));
    //                           Yuma Ito   22
});

Route::get('/about', 'PagesController@about');






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