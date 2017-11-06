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

Route::get('/', 'MainPageController@index');

Route::get('/textile', 'TextilesController@index');


Route::get('/textile/{id}', 'TextilesController@show');

Route::get('/admin',function(){
    return redirect('/admin/textile');
});

Route::get('/admin/textile','AdminController@textile_view_list');
Route::get('/admin/textile/add','AdminController@textile_view_add');
Route::post('/admin/textile/add','AdminController@textile_add');

Route::get('/admin/textile/edit/{id}','AdminController@textile_view_edit');
Route::post('/admin/textile/edit/{id}','AdminController@textile_edit');

Route::get('/admin/textile/delete/{id}','AdminController@textile_delete');




Route::get('/admin/project','ProjectController@index');
Route::get('/admin/project/list/','ProjectController@project_list');





