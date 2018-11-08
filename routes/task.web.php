<?php

use App\Task;

Route::get('/tasks', 'TasksController@index');
   //task.web.phpに行ったら 　　TasksController.php　の　function index()が機能する

Route::get('/tasks/{task}', 'TasksController@show');
// 

?>