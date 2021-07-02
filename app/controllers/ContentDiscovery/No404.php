<?php


namespace Controller\ContentDiscovery;


class No404
{

    public static function home(){
        \View::page('content-discovery/no404/home');
    }

}