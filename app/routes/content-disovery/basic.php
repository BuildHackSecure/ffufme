<?php
Route::add(array('GET', 'POST'), '/cd/basic', 'ContentDiscovery/Basic@home');
Route::add(array('GET', 'POST'), '/cd/basic/(development.log|class)', 'Tool@file');