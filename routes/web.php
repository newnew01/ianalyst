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
use Intervention\Image\Facades\Image;
use Milon\Barcode\DNS2D;

Route::get('/', 'MainPageController@index');



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
Route::post('/admin/project/add','ProjectController@project_add');
Route::post('/admin/project/edit/{id}','ProjectController@project_edit');
Route::get('/admin/project/delete/{id}','ProjectController@project_delete');
Route::get('/admin/project/info/{id}','ProjectController@getProjectInfo');


Route::get('/textile', 'TextilesController@index');


Route::get('/textile/{id}', 'TextilesController@show');

Route::get('/{project_name}/{id}', 'TextilesController@show2');


Route::get('/test_qrcode',function (){
    for($i=1;$i<=100;$i++){
        $base64_image = DNS2D::getBarcodePNG("http://ianalyst.in.cmu.ac.th/Flame-of-the-Forest/".$i, "QRCODE",20,20);


        $url = '/qrcode/';
        $image_name = "qrcode_".$i.".jpg";
        $path = public_path($url.$image_name);
        Image::make(base64_decode($base64_image))->encode('jpg', 75)->save($path);
    }


    return 'OK';
});

