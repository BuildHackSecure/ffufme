<?php

class View {

    public static function page($file, $data = array()) {
        return (file_exists('../view/' . $file . '.php')) ? include_once('../view/' . $file . '.php') : false;
    }
    
    public static function redirect($url) {
        header("Location: " . $url);
        exit();
    }

}