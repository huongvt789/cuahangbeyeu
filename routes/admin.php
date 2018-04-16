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
Route::group(array("prefix"=>"news"), function() {
    //list news
    Route::get('/','Admin\c_newsController@list_news')->name('news.index');
    // edit news
    Route::get('/edit/{id}','Admin\c_newsController@edit');
    //do edit news
    Route::post('/edit/{id}','Admin\c_newsController@do_edit');
    //add news
    Route::get('/add', 'Admin\c_newsController@add');
    //do add
    Route::post('/add','Admin\c_newsController@do_add');
    //delete news
    Route::get('/delete/{id}','Admin\c_newsController@delete');
});
Route::group(array("prefix"=>"producer"), function() {
    //list producer 
    Route::get('/','Admin\producerController@list_producer')->name('producer.index');
    // do add/edit
    Route::post('/', 'Admin\producerController@add_edit_producer');
    //delete
    Route::get('/delete/{id}','Admin\producerController@delete');
});

Route::group(array("prefix"=>"category"), function() {
    Route::get('/danhsach', 'Admin\CategoryController@getDanhSach')->name('category.index');

    Route::get('/them', 'Admin\CategoryController@getThem');
    Route::post('/them', 'Admin\CategoryController@postThem')->name('themCategory');

    Route::get('/sua/{id}', 'Admin\CategoryController@getSua');
    Route::post('/sua/{id}', 'Admin\CategoryController@postSua');

    Route::get('/xoa/{id}', 'Admin\CategoryController@getXoa');
});

Route::group(array("prefix"=>"product"), function() {
    Route::get('/danhsach', 'Admin\SanPhamController@getDanhSach')->name('product.index');

    Route::get('/them', 'Admin\SanPhamController@getThem');
    Route::post('/them', 'Admin\SanPhamController@postThem')->name('themProduct');

    Route::get('/sua/{id}', 'Admin\SanPhamController@getSua');
    Route::post('/sua/{id}', 'Admin\SanPhamController@postSua');

    Route::get('/xoa/{id}', 'Admin\SanPhamController@getXoa');
});

 ?>