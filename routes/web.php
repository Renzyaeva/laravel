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

Route::get('hello', function () {
    /*return view('hello', [
    	'name' => 'Irina'
    ]);*/
    
    /*$name = 'World';
    return view('hello', [
    	'name' => $name
    ]); //аналогичная запись */
    
    //return view('hello')->with('name', 'my dear friend'); //аналогичная запись
    
    /*$name = 'everybody';
    return view('hello', compact('name')); //аналогичная запись */

    $name = 'everybody';
    $tasks = [
    	'add', 
    	'edit',
    	'delete'
    ];
    return view('hello', compact('tasks', 'name'));
    /*return view('hello', [
    	'name' => $name,
    	'tasks' => $tasks
    ]); //аналогичная запись */
});

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();
    return view('tasks.index', compact('tasks')); //обращение к вьюшке по заданному пути
});

Route::get('/tasks/{task}', function ($id) {
    $task = DB::table('tasks')->find($id);
    return view('tasks.show', compact('task'));
});