<?php
$module_dir = '/cd/no404/';
if( substr($_SERVER["REQUEST_URI"],0,strlen($module_dir)) === $module_dir ){
    Route::set404('content-discovery/no404/404');
}
Route::add(array('GET', 'POST'), '/cd/no404', 'ContentDiscovery/No404@home');
Route::add(array('GET', 'POST'), '/cd/no404/secret', 'ContentDiscovery/Tool@file');