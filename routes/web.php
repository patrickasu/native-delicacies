<?php

use Illuminate\Support\Facades\Route;
use App\GeneralSetting;
use App\SocialMediaSetting;
use App\SeoSetting;

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

// Static Pages
Route::get('/', 'StaticPagesController@homepage');
Route::get('/menu', 'StaticPagesController@categoryMenu');
Route::get('/menu/{slug}', 'StaticPagesController@menu');
Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@store');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::post('/reservations', 'StaticPagesController@saveReservations');
Route::get('/contact', 'StaticPagesController@contactUs');
Route::get('/about', 'StaticPagesController@aboutUs');

// Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});

// Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');
Route::get('/admin/estimated-revenue-daily', 'admin\AdminController@getDailyRevenueLast30Days');

// Admin Food Categories Controllers
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')->middleware('role:Admin');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')->middleware('role:Admin');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')->middleware('role:Admin');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete')->middleware('role:Admin');

// Admin Food Items Controllers
Route::get('/admin/food-items', 'admin\FoodItemsController@index')->middleware('role:Admin');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create')->middleware('role:Admin');
Route::post('/admin/food-items', 'admin\FoodItemsController@store')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit')->middleware('role:Admin');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete')->middleware('role:Admin');

// Admin Customers Controllers
Route::get('/admin/members', 'admin\CustomersController@index');
Route::get('/admin/members/{id}/delete', 'admin\CustomersController@delete');

// Admin Reservations Controllers
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::get('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');

// Admin Users Controllers
Route::get('/admin/users', 'admin\UsersController@index')->middleware('role:Admin');
Route::get('/admin/users/create', 'admin\UsersController@create')->middleware('role:Admin');
Route::post('/admin/users', 'admin\UsersController@store')->middleware('role:Admin');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')->middleware('role:Admin');
Route::put('/admin/users/{id}', 'admin\UsersController@update')->middleware('role:Admin');
Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete')->middleware('role:Admin');

// Admin Settings
Route::get('/admin/settings/general', 'admin\SettingController@general')->middleware('role:Admin');
Route::put('/admin/settings/general', 'admin\SettingController@saveGeneral')->middleware('role:Admin');
Route::get('/admin/settings/seo', 'admin\SettingController@seo')->middleware('role:Admin');
Route::put('/admin/settings/seo', 'admin\SettingController@saveSeo')->middleware('role:Admin');
Route::get('/admin/settings/social-media', 'admin\SettingController@socialMedia')->middleware('role:Admin');
Route::put('/admin/settings/social-media', 'admin\SettingController@saveSocialMedia')->middleware('role:Admin');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

View::composer(['welcome', 'pages/reservations', 'pages/offers', 'pages/category-menu', 'pages/menu', 'pages/about', 'pages/contact',], function ($view) {
    $general_setting = GeneralSetting::find(1);
    $social_media_setting = SocialMediaSetting::find(1);
    $seo_setting = SeoSetting::find(1);

    $view->with('settings', [
        'general_setting' => $general_setting,
        'social_media_setting' => $social_media_setting,
        'seo_setting' => $seo_setting,
    ]);
});
