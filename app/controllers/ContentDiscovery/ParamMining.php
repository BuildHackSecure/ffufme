<?php


namespace Controller\ContentDiscovery;


class ParamMining
{


    public static function home(){
        \View::page('content-discovery/param/home');
    }

    public static function data(){
        if( isset($_GET["debug"]) ){
            echo "Required Parameter Found";
        }else{
            http_response_code(400);
            echo "Required Parameter Missing";
        }
    }

}