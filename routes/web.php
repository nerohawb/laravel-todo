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

//Route for home
Route::get('/', [

	'uses' => 'TodosController@index',
	'as' => 'todos'

	]);

// Get request for new post
Route::get('/new', [

	'uses' => 'PagesController@new'

	]);

// Creating and passing a new todo
Route::post('/create/todo', [

	'uses' => 'TodosController@store'

	]);

// Deleting a todo
Route::get('/todo/delete/{id}', [

	'uses' => 'TodosController@delete',
	'as' => 'todo.delete'

	]);

// return view for updating todo
Route::get('/todo/update/{id}', [

	'uses' => 'TodosController@update',
	'as' => 'todo.update'

	]);

// saving new todos
Route::post('/todo/save/{id}', [

	'uses' => 'TodosController@save',
	'as' => 'todo.save'

	]);

// state of todo
Route::get('/todo/completed/{id}', [

	'uses' => 'TodosController@completed',
	'as' => 'todo.completed'

	]);
