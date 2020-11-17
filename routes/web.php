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
    return view('login');
});
//Route::get('/', function () {
    //return view('login');
//});
Route::get('search', 'MainController@search');

Route::get('/details', 'MainController@details');
Route::get('/main', 'MainController@main');
Route::get('login', 'MainController@login');
Route::post('loginstore', 'MainController@loginstore');

Route::group(['middleware'=> 'logged'],function(){
Route::post('store', 'MainController@store');
Route::post('save', 'MainController@save');
Route::post('success', 'MainController@success');

Route::get('dashboard', 'MainController@dashboard');
Route::get('addsalesman/{id}', 'MainController@addsalesman');
Route::get('addcategory', 'MainController@addcategory');
Route::post('submit', 'MainController@submit');
Route::get('index', 'MainController@index');
Route::get('addcompany', 'MainController@addcompany');
Route::get('list', 'MainController@list');
Route::get('categorylist', 'MainController@categorylist'); 

Route::get('categorydelete/{id}', 'MainController@categorydelete')->name('categorydelete');

Route::get('salesman', 'MainController@salesman');
Route::get('deletesalesman/{id}', 'MainController@deletesalesman')->name('deletesalesman');
Route::get('delete/{id}', 'MainController@delete')->name('delete');
Route::get('edit/{id}', 'MainController@edit')->name('edit');
Route::post('update/{id}', 'MainController@update')->name('update');
Route::get('productlist', 'MainController@productlist');
Route::get('delete/{id}', 'MainController@delete')->name('delete');

Route::post('p_update/{id}', 'MainController@p_update')->name('p_update');
Route::get('editsalesman/{id}', 'MainController@edit_s');
Route::post('s_update/{id}', 'MainController@s_update');

Route::get('productdelete/{id}', 'MainController@productdelete')->name('productdelete');


Route::get('updateproduct/{id}', 'MainController@updateproduct')->name('updateproduct');

Route::get('edit_p/{id}', 'MainController@edit_p')->name('edit_p');

Route::get('default', 'MainController@default');


});
Route::get('Home', 'MainController@Home');