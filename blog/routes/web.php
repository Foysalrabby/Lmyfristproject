<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@showHome');
Route::get('/about','HomeController@showAbout');
Route::get('/service','HomeController@showService');
Route::get('/portfolio','HomeController@showPortfolio');