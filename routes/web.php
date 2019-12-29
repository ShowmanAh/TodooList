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
Route::get('todo', [
    'uses' => 'TodoController@index',
    'as' => 'todo',
]);
Route::post('/create/todo', 'TodoController@store');
Route::get('/todo/delete/{id}', [
    'uses' => 'TodoController@delete',
    'as' => 'todo.delete',
]);
Route::get('/todo/edit/{id}', [
    'uses' => 'TodoController@edit',
    'as' => 'todo.edit',
]);
Route::post('/todo/update/{id}', [
    'uses' => 'TodoController@update',
    'as' => 'todo.update',
]);
Route::get('/todo/completed/{id}', [
    'uses' => 'TodoController@complete',
    'as' => 'todo.completed',

]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
