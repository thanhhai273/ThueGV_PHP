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

Route::auth();

Route::get('/home', 'HomeController@index');
// Route::post('/find/name', 'SearchController@findByName');
// Route::get('/find/addr', 'SearchController@findByAddr');
Route::get('search',[
    'as'=>'search',
    'uses'=>'SearchController@search'
]);
Route::get('/dn', function () {
    return view('Login');
});

Route::get('/FAQ', function(){
    return view('FAQ');
});

Route::get('/contact', function(){
    return view('contact');
});
Route::get('/regulation', function(){
    return view('regulation');
});

Route::get('/DownApp', function(){
    return view('DownApp');
});

Route::get('/product', 'ProductController@list');
Route::get('/dichvu_sauxaydung', function(){
    return view('dichvu_sauxaydung');
});
Route::get('/dichvu_vanphong', function(){
    return view('dichvu_vanphong');
});
Route::get('/dichvu_congnghiep', function(){
    return view('dichvu_congnghiep');
});
Route::get('/dichvu_giatdem', function(){
    return view('dichvu_giatdem');
});

Route::get('/services_list', function(){
    return view('services_list');
});

Route::get('/introduction', function(){
    return view('introduction');
});

Route::get('/service1', function(){
    return view('service1');
});

Route::get('/service2', function(){
    return view('service2');
});

Route::get('/service3', function(){
    return view('service3');
});

Route::get('/service4', function(){
    return view('service4');
});

Route::get('/service5', function(){
    return view('service5');
});

// Route::get('/notify', function(){
//     return view('notify');
// });
Route::get('/confirm/{id}', 'ServiceController@confirm')->name('confirm');
Route::get('/hide/{id}', 'ServiceController@hide')->name('hide');
Route::get('/delete/{id}', 'ServiceController@delete')->name('delete');


Route::get('/notify/{id}', 'NotifyController@index')->name('notify');

Route::get('/form/{guest_id}/{id}', 'FormController@create')->name('select');
Route::post('/form/{guest_id}/{id}', 'FormController@store')->name('form');

Route::get('/employees_list', 'EmployeesListController@list')/*->middleware('auth');*/;
#Route::get('/employee_detail/{id}', 'EmployeesListController@detail($id)')->name('employeedetail');
Route::get('/employee_detail/{id}', array('uses' => 'EmployeesListController@detail', 'as' => 'employeedetail'));
