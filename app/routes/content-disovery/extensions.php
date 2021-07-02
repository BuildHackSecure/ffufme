<?php
Route::add(array('GET', 'POST'), '/cd/ext', 'ContentDiscovery/Extensions@home');
Route::add(array('GET', 'POST'), '/cd/ext/logs', 'Tool@directory');
Route::add(array('GET', 'POST'), '/cd/ext/logs/users.log', 'Tool@file');