<?php


namespace Controller\ContentDiscovery;


class No404
{

    public static function home(){
        $data = array(
            'size'  =>  strlen(file_get_contents('http://127.0.0.1/cd/no404/sdfsfsfsdf'))
        );
        \View::page('content-discovery/no404/home',$data);
    }

}