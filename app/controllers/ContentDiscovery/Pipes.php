<?php


namespace Controller\ContentDiscovery;


class Pipes
{


    public static function home(){
        \View::page('content-discovery/pipes/home');
    }

    public static function user(){
        if( isset($_GET["id"]) ){
            if( intval($_GET["id"]) === 657 ){
                echo "User ID Found";
                exit();
            }
        }
        http_response_code(404);
        echo "User ID Not Found";
    }

    public static function user2(){
        if( isset($_GET["id"]) ){
            if( $_GET["id"] === 'ODg4Cg==' || $_GET["id"] === 'ODg4' ){
                echo "User ID Found";
                exit();
            }
        }
        http_response_code(404);
        echo "User ID Not Found";
    }

    public static function user3(){
        if( isset($_GET["id"]) ){
            if( $_GET["id"] === '4daa3db355ef2b0e64b472968cb70f0d' ){
                echo "User ID Found";
                exit();
            }
        }
        http_response_code(404);
        echo "User ID Not Found";
    }


}