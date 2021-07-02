<?php
Route::add(array('GET', 'POST'), '/cd/recursion', 'ContentDiscovery/Recursion@home');
Route::add(array('GET', 'POST'), '/cd/recursion/admin', 'Tool@directory');
Route::add(array('GET', 'POST'), '/cd/recursion/admin/users', 'Tool@directory');
Route::add(array('GET', 'POST'), '/cd/recursion/admin/users/96', 'Tool@file');