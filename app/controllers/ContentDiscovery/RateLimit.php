<?php


namespace Controller\ContentDiscovery;


class RateLimit
{


    public static function home(){
        \View::page('content-discovery/rate-limit/home');
    }

}