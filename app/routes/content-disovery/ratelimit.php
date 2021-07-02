<?php
Route::add(array('GET', 'POST'), '/cd/rate', 'ContentDiscovery/RateLimit@home');
Route::add(array('GET', 'POST'), '/cd/rate/oracle', 'Tool@file');