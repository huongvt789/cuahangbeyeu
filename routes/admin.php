<?php 
Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
Route::group(['prefix'=>'qladmin'],function(){
	Route::get('/','Admin\AdminController@index')->name('qladmin.index');
	Route::get('/add','Admin\AdminController@add')->name('qladmin.add');
	Route::post('/save','Admin\AdminController@save')->name('qladmin.save');
	Route::get('/update/{id}','Admin\AdminController@edit')->name('qladmin.edit');
	Route::get('/remove/{id}','Admin\AdminController@remove')->name('qladmin.remove');
	Route::post('/check-name','Admin\AdminController@checkName')->name('qladmin.checkName');
});
 ?>