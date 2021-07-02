<?php
Route::add(array('GET', 'POST'), '/', 'Website@home');

Route::add(array('GET', 'POST'), '/about', 'Website@about');
Route::add(array('GET', 'POST'), '/help', 'Website@help');
Route::add(array('GET', 'POST'), '/credits', 'Website@credits');

Route::add(array('GET', 'POST'), '/wordlists', 'Website@wordlists');