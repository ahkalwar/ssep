<?php

use Illuminate\Support\Facades\Route;
include('api.php');
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
    //return view('welcome');
    echo "working";
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('testing_imap','AppointmentsController@ImapMailFetch');