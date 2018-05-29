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

Auth::routes();

Route::get('/', 'PagesController@home')->name('home');
Route::get('/partnership', 'PagesController@partnership')->name('partnership');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', ['uses' => 'Admin\AdminController@login', 'as' => 'login']);

Route::get('/booking', 'BookingPageController@index');

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function ()
{
    Route::get('/', ['uses' => 'Admin\AdminController@index', 'as' => 'admin']);

    Route::resource('hotels', 'Admin\HotelsController');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('photos', 'Admin\PhotosController');
    Route::resource('hotel_photos', 'Admin\HotelPhotosController');
    Route::resource('hotels.photos', 'Admin\HotelPhotosController');
    Route::resource('hotels.rooms', 'Admin\HotelRoomsController');
    Route::resource('hotels.feedbacks', 'Admin\FeedbacksController');

    Route::get('hotels/{hotel}/contacts_edit', ['uses' => 'Admin\HotelContactsController@edit', 'as' =>'hotels.contacts.edit']);
    Route::get('hotels/{hotel}/seo_edit', ['uses' => 'Admin\HotelSeoController@edit', 'as' =>'hotels.seo.edit']);

    Route::get('hotels/{hotel}/photos/create/{type_id}', ['uses' => 'Admin\HotelPhotosController@create', 'as' =>'hotels.photos.create.type']);
});

Route::post('/ajax/live_search', 'Ajax\LiveSearchController@index');
Route::post('/ajax/live_search_result', 'Ajax\LiveSearchController@result');
Route::post('/ajax/booking_form_handler', 'Ajax\BookingFormHandler@index');
Route::post('ajax/make_img_crop', 'Ajax\ImageCropController@index');
Route::post('ajax/photo_store', 'Ajax\PhotoStoreController@index');
Route::post('ajax/forms_handler', 'Ajax\FormsHandlerController@index');
Route::post('ajax/hotels-select-handler', 'Ajax\HotelsSelectHandler@index');

//
Route::get('/{address}', ['uses' => 'HotelController@show', 'as' => 'hotel']);