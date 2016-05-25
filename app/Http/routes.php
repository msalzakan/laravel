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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', function () {
    $students = App\Student::all();
	
	foreach($students as $stu){
		echo $stu->name.":<br/>";
		$tasks = $stu->tasks();
		echo "<ul>";
			foreach($tasks as $task){
				echo "<li>".$task->name."</li>";
			}
		echo "</ul>";
	}
});
