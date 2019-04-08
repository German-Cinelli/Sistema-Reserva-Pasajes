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
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard.dashboard');
});

// ##### Dashboard
Route::get('start', function () {
    return view('dashboard.starter');
});

### ---------------------- ROUTES: TRAVELS
// travels->create button
Route::get('travel-create', function () {
    return view('travels.create');
})->name('travel-create');

// travels->index button
Route::get('travel-index', function () {
    return view('travels.index');
})->name('travel-index');

### ---------------------- ROUTES: USERS
// users.create button
Route::get('user', function () {
    return view('users.create');
})->name('user');

// users.edit button
Route::get('user-index', function () {
    return view('users.index');
})->name('user-index');


Route::resource('travels', 'TravelController');
Route::get('/travels-auditor', 'TravelController@auditor')->name('travels-auditor');
Route::resource('users', 'UserController');
Route::resource('tickets', 'TicketController');

Route::get('/ticket', 'TicketController@edit')->name('ticket');
Route::get('/tickets-auditor', 'TicketController@auditor')->name('tickets-auditor');

Route::resource('tests', 'TestController');

Route::resource('equipaments', 'EquipamentController');

Route::resource('buses', 'BusController');
Route::resource('drivers', 'DriverController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*PDF Test
Route::get('/', 'TestController@index')->name('tests');
Route::get('descargar-tests', 'TestController@pdf')->name('tests.pdf');*/

