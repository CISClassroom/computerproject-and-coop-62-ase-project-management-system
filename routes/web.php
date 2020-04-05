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

Route::get('/', 'ProposeController@index')->name('index');
Route::get('/charts','ProposeController@charts');
Route::get('projectcharts.{id}','ProposeController@getprojectcharts');
Route::get('/annual','ProposeController@annual');
Route::get('projectannual.{id}','ProposeController@annual');
Route::get('/newplan', function () {
    return view('newplan');
});
Route::get('/category', 'CategoryController@category')->name('category'); 

Route::get('/department', 'DepartmentController@department')->name('department');
Route::get('/add_category', function () {
    return view('add_category');
});
Route::get('/add_depart', function () {
    return view('add_depart');
});
Route::get('/description', function () {
    return view('description');
});

Route::get('list.{id}','ProposeController@listannual_show');
Route::get('listone.{id}','ProposeController@annual');
Route::get('listtwo.{id}','ProposeController@annual');

Route::get('projectlist.{id}','ProposeController@getlist');

Route::get('categoryshow.{id}','ProposeController@annual');

Route::get('/user', 'ProposeController@user')->name('user');
Route::get('/approve','CategoryController@approve')->name('approve');
Route::get('/manual', function () {
    return view('manual');
});

Route::post('postform','ProposeController@postform');
Route::post('postcategory','CategoryController@postcategory');
Route::post('postdepart','DepartmentController@postdepart');


Route::get('project.{id}','ProposeController@getprojectbyid');
Route::post('updatedata','ProposeController@updatedata');
Route::get('projectadd.{id}','ProposeController@getprojectbyname');
Route::post('updateadd','ProposeController@updateadd');

Route::get('category.{id}','CategoryController@getcategorybyid');
Route::post('updatecategory','CategoryController@updatecategory');
Route::get('department.{id}','DepartmentController@getdepartmentbyid');
Route::post('updatedepart','DepartmentController@updatedepart');


Auth::routes();

Route::get('/home', 'ProposeController@user')->name('home');
Route::get('/admin','ProposeController@user')->name('admin');


Route::get('load.download/{file_name}', function ($file_name = null) {
    $path = storage_path() . '/' . 'app' . '/fileuploads/' . $file_name;
    if (file_exists($path)) {
        return Response::download($path);
    }
})->name('load.download');

Route::post('setQuickTextAreaSize','ProposeController@setQuickTextAreaSize');
Route::get('projectdelete.{id}','ProposeController@destroy');

Route::get('sendhtmlemail','MailController@html_email');
Route::get('barchart','ProposeController@barchart');


