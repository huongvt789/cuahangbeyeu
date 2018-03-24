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
Route::group(['prefix'=>'order'],function(){
	Route::get('/','Admin\OrderController@index')->name('order.index');
	Route::get('/pass','Admin\OrderController@pass')->name('order.pass');
	Route::get('/destroy','Admin\OrderController@destroy')->name('order.destroy');
	Route::get('/update/{id}','Admin\OrderController@update')->name('order.update');
	Route::get('/remove/{id}','Admin\OrderController@remove')->name('order.remove');
	Route::get('/info/{id}','Admin\OrderController@info')->name('order.info');
	Route::get('/pdfview/{id}','Admin\OrderController@pdfview')->name('order.pdfview');
	// Route::get('pdfview/{id}',array('as'=>'pdfview','uses'=>'Admin\OrderController@pdfview'));
});
 ?>