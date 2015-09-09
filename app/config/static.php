<?php

return new \Phalcon\Config(array(

    // Title for the project
    'title' => 'Phalcana',

    // The base url for the site usually the path relative to your web root.
    'base_url' => '/',

    // Static base url for the full domain of your site.
    'static_base_url' => 'http://phalcana.local',


    'errors_email' => 'error500@localhost',

    'modules' => array(
        'email' => MODPATH.'email/',
        'unittest' => MODPATH.'unittest/',
    ),

    // TRUE/FALSE or auto, Auto turns on for production but off in development
    'path_cache' => 'auto',

));
