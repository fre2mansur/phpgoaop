<?php

class MyPluginBootstrap
{
    public static function init()
    {
        require_once 'vendor/autoload.php'; // Adjust the path accordingly
        MyPluginAspect::init();
    }
}

MyPluginBootstrap::init();