<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('adviser.index');
});

Route::get('branch', 'BranchController@index')->name('branch.index');
Route::get('branch/{id}/show', 'BranchController@show')->name('branch.show');

Route::get('adviser', 'AdviserController@index')->name('adviser.index');
Route::get('adviser/{id}/show', 'AdviserController@show')->name('adviser.show');
