<?php


namespace Controller;


class Tool
{

    public static function file(){
        echo "You Found The File!";
    }

    public static function directory(){
        $url = explode('?',$_SERVER["REQUEST_URI"]);
        if( substr($url[0],-1,1) !== '/' ){
            $redirect_to = $url[0].'/';
            if( isset($url[1]) ){
                $redirect_to .= '?'.$url[1];
            }
            http_response_code(301);
            header("Location: ".$redirect_to);
            exit();
        }
        http_response_code(403);
        \View::page('403');
    }


}