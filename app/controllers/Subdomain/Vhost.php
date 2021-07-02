<?php


namespace Controller\Subdomain;


class Vhost
{

    public static function home(){
        $data = array(
            'size'  =>  strlen(file_get_contents('http://127.0.0.1'))
        );
        \View::page('subdomain/vhost/home',$data);
    }




}