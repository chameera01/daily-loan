<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

$app->get('/', function () use ($app) {
	return redirect()->route('resources');
});

$app->get('resources', [
	'as' => 'resources', 'uses' => 'ResourceController@introduce'
]);

/**
 * user activities
 */
$app->get('user','UserController@index');
$app->get('user/{id}','UserController@getUser');
$app->post('user','UserController@createUser');
$app->put('user/{id}','UserController@updateUser');
$app->delete('user/{id}','UserController@deleteUser');

/**
 * customer activities
 */
$app->get('customer','CustomerController@index');
$app->get('customer/{id}','CustomerController@getCustomer');
$app->post('customer','CustomerController@createCustomer');
$app->put('customer/{id}','CustomerController@updateCustomer');
$app->delete('customer/{id}','CustomerController@deleteCustomer');

/**
 * loan activities
 */
$app->get('loan','LoanController@index');
$app->get('loan/{id}','LoanController@getLoan');
$app->post('loan','LoanController@createLoan');
$app->put('loan/{id}','LoanController@updateLoan');
$app->delete('loan/{id}','LoanController@deleteLoan');