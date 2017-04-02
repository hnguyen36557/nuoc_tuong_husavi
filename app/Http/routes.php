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

//Route::get('/', function () {
//    return view('layouts.client.index');
//});

Route::auth();

Route::get('/', 'HomeController@index');

Route::get('danh-muc/{alias1}', ['as'=>'danh-muc','uses'=>'PostController@getPostList']);
Route::get('bai-viet/{alias1}/{alias2}',['as'=>'post','uses'=>'PostController@getPost']);
Route::get('lien-he', function (){ return view('layouts.client.contact'); });
Route::get('dat-lich-hen', function (){ return view('layouts.client.appointtment'); });

Route::resource('/cart', 'CartController');

Route::get('checkout','CustomerController@shipping');
Route::post('checkout','CustomerController@postShipping')->name('checkout.postShipping');

Route::post('order', 'OrderController@Order');


// ROUTE FOR ADMIN SITE
Route::group(['prefix'=>'admin'],function (){	
	// ROUTE FOR HOME	
	//Route::get('home',['as'=>'admin.home.index','uses'=>'AdminController@getIndex']);
	Route::get('/dashboard', 'AdminController@getIndex');
	Route::get('/', 'AdminController@getIndex');
	// ROUTE FOR CATEGORY
	Route::group(['prefix'=>'cate'],function (){
		Route::get('list/{type}',['as'=>'admin.cate.list','uses'=>'CategoryController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CategoryController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CategoryController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CategoryController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CategoryController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CategoryController@postEdit']);
	});
	
	// ROUTE FOR ADMIN
	Route::group(['prefix'=>'admin'],function (){
		Route::get('list',['as'=>'admin.admin.list','uses'=>'AdminController@getList']);
		Route::get('add',['as'=>'admin.admin.getAdd','uses'=>'AdminController@getAdd']);
		Route::post('add',['as'=>'admin.admin.postAdd','uses'=>'AdminController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.admin.getDelete','uses'=>'AdminController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.admin.getEdit','uses'=>'AdminController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.admin.postEdit','uses'=>'AdminController@postEdit']);
	});
	// ROUTE FOR USER
	Route::group(['prefix'=>'user'],function (){
		Route::get('profile',['as'=>'admin.user.profile','uses'=>'UserController@getProfile']);
		Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);

		// Route::get('password',function (){ return view('admin.user.password'); });;
		// Route::post('password',['as'=>'auth.password','uses'=>'Auth\PasswordController@update']);
	});
	Route::group(['prefix'=>'slide'],function (){
		Route::get('list',['as'=>'layouts.admin.slide.list','uses'=>'SlideController@getList']);
		Route::get('add',['as'=>'layouts.admin.slide.getAdd','uses'=>'SlideController@getAdd']);
		Route::post('add',['as'=>'layouts.admin.slide.postAdd','uses'=>'SlideController@postAdd']);
		Route::get('delete/{id}',['as'=>'layouts.admin.slide.getDelete','uses'=>'SlideController@getDelete']);
		Route::get('edit/{id}',['as'=>'layouts.admin.slide.getEdit','uses'=>'SlideController@getEdit']);
		Route::post('edit/{id}',['as'=>'layouts.admin.slide.postEdit','uses'=>'SlideController@postEdit']);
		Route::get('delimg/{id}',['as'=>'layouts.admin.slide.getDelImg','uses'=>'SlideController@getDelImg']);
	});	

	// ROUTE FOR Product
	Route::group(['prefix'=>'product'],function (){
		Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@getList']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@productAdd']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.productEdit','uses'=>'ProductController@productEdit']);
		Route::get('delimg/{id}',['as'=>'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
	});
	// ROUTE FOR Post
	Route::group(['prefix'=>'post'],function (){
		Route::get('list',['as'=>'admin.post.list','uses'=>'PostController@getList']);
		Route::get('add',['as'=>'admin.post.getAdd','uses'=>'PostController@getAdd']);
		Route::post('add',['as'=>'admin.post.postAdd','uses'=>'PostController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.post.getDelete','uses'=>'PostController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.post.getEdit','uses'=>'PostController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.post.postEdit','uses'=>'PostController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.post.getDelImg','uses'=>'PostController@getDelImg']);
	});	

	// ROUTE FOR Page
	Route::group(['prefix'=>'page'],function (){
		Route::get('list',['as'=>'admin.page.list','uses'=>'PageController@getList']);
		Route::get('add',['as'=>'admin.page.getAdd','uses'=>'PageController@getAdd']);
		Route::post('add',['as'=>'admin.page.postAdd','uses'=>'PageController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.page.getDelete','uses'=>'PageController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.page.getEdit','uses'=>'PageController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.page.postEdit','uses'=>'PageController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.page.getDelImg','uses'=>'PageController@getDelImg']);
	});	 

	Route::group(['prefix'=>'new'],function (){
		Route::get('list',['as'=>'admin.new.list','uses'=>'NewController@getList']);
		Route::get('add',['as'=>'admin.new.getAdd','uses'=>'NewController@getAdd']);
		Route::post('add',['as'=>'admin.new.postAdd','uses'=>'NewController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.new.getDelete','uses'=>'NewController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.new.getEdit','uses'=>'NewController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.new.postEdit','uses'=>'NewController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.new.getDelImg','uses'=>'NewController@getDelImg']);
	});	
	// ROUTE FOR MEDIA
	Route::group(['prefix'=>'media'],function (){
		Route::get('list',['as'=>'admin.media.list','uses'=>'MediaController@getList']);
		Route::get('add',['as'=>'admin.media.getAdd','uses'=>'MediaController@getAdd']);
		Route::post('add',['as'=>'admin.media.postAdd','uses'=>'MediaController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.media.getDelete','uses'=>'MediaController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.media.getEdit','uses'=>'MediaController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.media.postEdit','uses'=>'MediaController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.media.getDelImg','uses'=>'MediaController@getDelImg']);
	});	
	// ROUTE FOR IMAGE
	Route::group(['prefix'=>'image'],function (){
		Route::get('list',['as'=>'admin.image.list','uses'=>'ImageController@getList']);
		Route::get('add',['as'=>'admin.image.getAdd','uses'=>'ImageController@getAdd']);
		Route::post('add',['as'=>'admin.image.postAdd','uses'=>'ImageController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.image.getDelete','uses'=>'ImageController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.image.getEdit','uses'=>'ImageController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.image.postEdit','uses'=>'ImageController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.image.getDelImg','uses'=>'ImageController@getDelImg']);
	});	
});