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

// $api = app('Dingo\Api\Routing\Router');

Route::get('/', function () {
    return view('welcome');
});

// $api->version('v1', [], function ($api) {

//     $api->get('users', 'App\Http\Controllers\Api\UserController@getUsers');
//     $api->get('users/{user_id}/roles/{role_name}', 'App\Http\Controllers\Api\UserController@attachUserRole');
//     $api->get('users/{user_id}/roles', 'App\Http\Controllers\Api\UserController@getUserRole');
//     $api->post('role/permission/add', 'App\Http\Controllers\Api\UserController@attachPermission');
//     $api->get('role/permissions/{role}', 'App\Http\Controllers\Api\UserController@getPermissions');
// });

// API routes
Route::group(['prefix' => 'api'], function() {
	// users
    Route::post('users', 'Api\UserController@create');
	Route::get('users/{id}', 'Api\UserController@show');
	Route::put('users/{id}', 'Api\UserController@update');
	Route::delete('users/{id}', 'Api\UserController@delete');
	Route::get('users', 'Api\UserController@index');
	Route::put('users/{id}/image', 'Api\UserController@uploadImage');
	Route::get('users/{id}/favorites', 'Api\UserController@favorites');
	Route::get('users/{id}/checkins', 'Api\CheckinController@index');

	// place
	Route::get('places', 'Api\PlaceController@index');
	Route::get('places/{id}', 'Api\PlaceController@show');
});
