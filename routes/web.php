<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/listing-agents', function () {
    return view('listing-agents');
});
Route::get('/locations', function () {
    return view('locations');
});
Route::get('/bayut-locations', function () {
    return view('bayut-locations');
});
Route::get('/landlords', function () {
    return view('landlords');
});
Route::get('/developers', function () {
    return view('developers');
});
Route::get('/settings', function () {
    return view('settings');
});
