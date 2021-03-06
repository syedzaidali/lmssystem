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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get()->name('register');

Route::get('/homes', 'FrontController@soleHome')->name('sol-index');
Route::get('/sol/course-list', 'FrontController@courseList')->name('sol-course-list');
Route::get('/sol/course-details/{id}', 'FrontController@courseDetails');
Route::get('/sol/shop', 'FrontController@solShop')->name('sol-shop');
Route::get('/sol/shop-single', 'FrontController@solShopsingle')->name('sol-shop-single');
Route::get('/sol/shop-cart', 'FrontController@solCart')->name('sol-shop-cart');
Route::get('/sol/contact', 'FrontController@solContact')->name('sol-contact');

// admin routes
Route::get('/admin-dashboard', 'FrontController@soleDashboard')->name('admin-dashboard');
Route::get('/my-course', 'FrontController@soleCourse')->name('my-course');
Route::get('/orders', 'FrontController@soleOrder')->name('order');
Route::get('/message', 'FrontController@soleMessage')->name('message');
Route::get('/listing', 'FrontController@soleListing')->name('listing');
Route::get('/component', 'FrontController@soleComponent')->name('component');

// categories
Route::get('/categoies', 'CategoryController@index')->name('categoies-index');
Route::get('/categoies/create', 'CategoryController@create')->name('categoies-create');
Route::get('/categoies/store', 'CategoryController@store')->name('categoies-store');
Route::get('/categoies/edit/{id}', 'CategoryController@edit')->name('categoies-edit');
Route::get('/categoies/update/{id}', 'CategoryController@update')->name('categoies-update');
Route::get('/categoies/status/{id}', 'CategoryController@status')->name('categoies-status');


// form
Route::get('/form', 'CategoryController@form')->name('form');

// Categoires
Route::resource('categories', 'CategoryController');
Route::resource('subcategories', 'SubCatehoryController');
Route::resource('childcategories', 'ChildCatehoryController');

// Testimonial
Route::resource('testimonial', 'TestimonialController');
Route::post('/testimonial/update', 'TestimonialController@update')->name('testimonial-update');

// Slider
Route::resource('slider', 'SliderController');
Route::post('/slider/update', 'SliderController@update')->name('slider-update');
// NewsLetter
Route::resource('newsletter', 'NewslatterController');
Route::post('/newsletter/update', 'NewslatterController@update')->name('newsletter-update');

// my Course

Route::get('/cousre/create', 'CourseController@create')->name('cousre-create');
Route::post('/cousre/store', 'CourseController@store')->name('cousre-store');
Route::get('/cousre/edit/{id}', 'CourseController@edit')->name('cousre-edit');
Route::post('/cousre/update', 'CourseController@update')->name('cousre-update');
Route::get('/get-categories-by-sub_categories', 'CourseController@getSubCat')->name('get-categories-by-sub_categories');
Route::get('/get-sub_categories-by-child_categories', 'CourseController@getChildCat')->name('get-sub_categories-by-child_categories');

Route::prefix('projects')->group(function () {

    Route::get('courseVideo', 'CourseController@courseVideo')->name('courseVideo');
    Route::get('courseContant', 'CourseController@courseContant')->name('courseContant');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
