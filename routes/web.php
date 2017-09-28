<?php


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/ingreso', function () {
    return view('auth.login');
});

Route::any('/',['as'=>'home','uses'=>'HomeController@index']);
Route::any('/results',['as'=>'results','uses'=>'CuponController@results']);

Route::get('/cupon/{id}',['as'=>'cupon.view','uses'=>'CuponController@view']);

Route::get('image/{id}', [
    'as' => 'images.show',
    'uses' => 'ImageController@show',
    //'middleware' => 'auth',
]);

Route::get('/download/{id}', [
    'as' => 'images.download',
    'uses' => 'ImageController@download',
    //'middleware' => 'auth',
]);

//Auth::routes();

