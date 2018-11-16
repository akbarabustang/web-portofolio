<?php



Route::get('/', function () {
    return view('backend.dashboard');
});

Route::get('/sample', function () {
    return view('backend.sample');
});
