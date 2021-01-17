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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Frontend\FrontenController@index');
Route::get('about-us','Frontend\FrontenController@AboutUs')->name('About.us');
Route::get('contact-us','Frontend\FrontenController@ContactUs')->name('Contact.us');
Route::get('/ShoppingCArt','Frontend\FrontenController@ShoppingCArt')->name('ShoppingCArt.us');
Route::get('produc-list','Frontend\FrontenController@produclist')->name('produc.list');
Route::get('category-wise-product{category_id}','Frontend\FrontenController@categorywiseproduct')->name('category.wise.product');
Route::get('brand-wise-product{brand_id}','Frontend\FrontenController@brandwiseproduct')->name('brand.wise.product');
Route::get('product-details{slug}','Frontend\FrontenController@productdetails')->name('product.details.info');



//shopping cart
Route::post('/add-to-cart','Frontend\CartController@addtocard')->name('insert-cart');
Route::get('/show-cart','Frontend\CartController@showcard')->name('show.cart');















Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
// users............
Route::prefix('users')->group(function(){
Route::get('/view','backend\UserController@view')->name('users.view')->middleware('test');
Route::get('/add','backend\UserController@add')->name('users.add');
Route::post('/store','backend\UserController@store')->name('users.store');
Route::get('edit/{id}','backend\UserController@edit')->name('users.edit');
Route::post('update/{id}','backend\UserController@update')->name('users.update');
Route::get('delete/{id}','backend\UserController@delete')->name('users.delete');
}); 
//End users............

// sliders............
Route::prefix('profiles')->group(function(){
Route::get('/view','backend\ProfileController@view')->name('profiles.view');
Route::get('/edit','backend\ProfileController@edit')->name('profiles.edit');
Route::post('/update','backend\ProfileController@update')->name('profiles.update');
Route::get('/password/view','backend\ProfileController@passwordView')->name('profiles.password.view');
Route::post('/password/update','backend\ProfileController@passwordupdate')->name('profiles.password.update');

}); 
//End sliders............

// logos............
Route::prefix('logos')->group(function(){
Route::get('/view','backend\LogoController@view')->name('logos.view');
Route::get('/add','backend\LogoController@add')->name('logos.add');
Route::post('/store','backend\LogoController@store')->name('logos.store');
Route::get('edit/{id}','backend\LogoController@edit')->name('logos.edit');
Route::post('update/{id}','backend\LogoController@update')->name('logos.update');
Route::get('delete/{id}','backend\LogoController@delete')->name('logos.delete');
}); 
//End logos............

// sliders............
Route::prefix('sliders')->group(function(){
Route::get('/view','backend\SlidersController@view')->name('sliders.view');
Route::get('/add','backend\SlidersController@add')->name('sliders.add');
Route::post('/store','backend\SlidersController@store')->name('sliders.store');
Route::get('edit/{id}','backend\SlidersController@edit')->name('sliders.edit');
Route::post('update/{id}','backend\SlidersController@update')->name('sliders.update');
Route::get('delete/{id}','backend\SlidersController@delete')->name('sliders.delete');
}); 
//End sliders............

// missions............
Route::prefix('missions')->group(function(){
Route::get('/view','backend\MissionController@view')->name('missions.view');
Route::get('/add','backend\MissionController@add')->name('missions.add');
Route::post('/store','backend\MissionController@store')->name('missions.store');
Route::get('edit/{id}','backend\MissionController@edit')->name('missions.edit');
Route::post('update/{id}','backend\MissionController@update')->name('missions.update');
Route::get('delete/{id}','backend\MissionController@delete')->name('missions.delete');
}); 
//End missions............

// contacts............
Route::prefix('contacts')->group(function(){
Route::get('/view','backend\ContactController@view')->name('contacts.view');
Route::get('/add','backend\ContactController@add')->name('contacts.add');
Route::post('/store','backend\ContactController@store')->name('contacts.store');
Route::get('edit/{id}','backend\ContactController@edit')->name('contacts.edit');
Route::post('update/{id}','backend\ContactController@update')->name('contacts.update');
Route::get('delete/{id}','backend\ContactController@delete')->name('contacts.delete');
}); 
//End contacts............

// abouts............
Route::prefix('abouts')->group(function(){
Route::get('/view','backend\ContactController@view')->name('abouts.view');
Route::get('/add','backend\ContactController@add')->name('abouts.add');
Route::post('/store','backend\ContactController@store')->name('abouts.store');
Route::get('edit/{id}','backend\ContactController@edit')->name('abouts.edit');
Route::post('update/{id}','backend\ContactController@update')->name('abouts.update');
Route::get('delete/{id}','backend\ContactController@delete')->name('abouts.delete');
}); 
//End abouts............

// categories............
Route::prefix('categories')->group(function(){
Route::get('/view','backend\CategoryController@view')->name('categories.view');
Route::get('/add','backend\CategoryController@add')->name('categories.add');
Route::post('/store','backend\CategoryController@store')->name('categories.store');
Route::get('/edit/{id}','backend\CategoryController@edit')->name('categories.edit');
Route::post('/update/{id}','backend\CategoryController@update')->name('categories.update');
Route::get('/delete/{id}','backend\CategoryController@delete')->name('categories.delete');
}); 
// End categories............

// brand............
Route::prefix('brands')->group(function(){
Route::get('/view','backend\BrandController@view')->name('brands.view');
Route::get('/add','backend\BrandController@add')->name('brands.add');
Route::post('/store','backend\BrandController@store')->name('brands.store');
Route::get('/edit/{id}','backend\BrandController@edit')->name('brands.edit');
Route::post('/update/{id}','backend\BrandController@update')->name('brands.update');
Route::get('/delete/{id}','backend\BrandController@delete')->name('brands.delete');
}); 
// End brand............


// colors............
Route::prefix('colors')->group(function(){
Route::get('/view','backend\ColorController@view')->name('colors.view');
Route::get('/add','backend\ColorController@add')->name('colors.add');
Route::post('/store','backend\ColorController@store')->name('colors.store');
Route::get('/edit/{id}','backend\ColorController@edit')->name('colors.edit');
Route::post('/update/{id}','backend\ColorController@update')->name('colors.update');
Route::get('/delete/{id}','backend\ColorController@delete')->name('colors.delete');
}); 
// End colors............

// colors............
Route::prefix('sizes')->group(function(){
Route::get('/view','backend\SizeController@view')->name('sizes.view');
Route::get('/add','backend\SizeController@add')->name('sizes.add');
Route::post('/store','backend\SizeController@store')->name('sizes.store');
Route::get('/edit/{id}','backend\SizeController@edit')->name('sizes.edit');
Route::post('/update/{id}','backend\SizeController@update')->name('sizes.update');
Route::get('/delete/{id}','backend\SizeController@delete')->name('sizes.delete');
}); 
// End sizes............

// colors............
Route::prefix('products')->group(function(){
Route::get('/view','backend\ProductsController@view')->name('products.view');
Route::get('/add','backend\ProductsController@add')->name('products.add');
Route::post('/store','backend\ProductsController@store')->name('products.store');
Route::get('/edit/{id}','backend\ProductsController@edit')->name('products.edit');
Route::get('details/{id}','backend\ProductsController@details')->name('products.details');
Route::post('/update/{id}','backend\ProductsController@update')->name('products.update');
Route::get('/delete/{id}','backend\ProductsController@delete')->name('products.delete');
}); 
// End sizes............

//modal
Route::prefix('modal')->group(function(){
Route::get('/edit/{id}','backend\ModalController@edit')->name('modal.edit');
});

});

