<?php


namespace Controller;


class Website
{
    public static function home(){
        \View::page('home');
    }

    public static function about(){
        \View::page('about');
    }

    public static function help(){
        \View::page('help');
    }

    public static function wordlists(){
        \View::page('wordlists');
    }

    public static function credits(){
        \View::page('credits');
    }
}