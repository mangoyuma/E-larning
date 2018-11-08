<?php

Route::get('/', function (){

    $task = DB::table('db')->get()

	return view('insert.Form');
// [insert.Form.blade.php]で受け入れる
});
　　　　//ページ入ったら　　ファンクションinsertintoが動く　
Route::post('/insert','insertController@insert');
//insert.Form.blade.phpブラウザーファイル Controllerフォルダー @insertファンクションネーム
// @insertは"inserController.php"で定義されたファンクションinsert($data)

?>