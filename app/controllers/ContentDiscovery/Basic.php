<?php


namespace Controller\ContentDiscovery;


class Basic
{

    public static function home(){
        \View::page('content-discovery/basic/home');
    }

    public static function secret(){
        echo "secret zone";
    }



}