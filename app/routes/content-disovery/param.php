<?php

Route::add(array('GET', 'POST'), '/cd/param', 'ContentDiscovery/ParamMining@home');
Route::add(array('GET', 'POST'), '/cd/param/data', 'ContentDiscovery/ParamMining@data');