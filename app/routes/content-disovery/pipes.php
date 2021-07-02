<?php
Route::add(array('GET', 'POST'), '/cd/pipes', 'ContentDiscovery/Pipes@home');


Route::add(array('GET', 'POST'), '/cd/pipes/user', 'ContentDiscovery/Pipes@user');
Route::add(array('GET', 'POST'), '/cd/pipes/user2', 'ContentDiscovery/Pipes@user2');
Route::add(array('GET', 'POST'), '/cd/pipes/user3', 'ContentDiscovery/Pipes@user3');

