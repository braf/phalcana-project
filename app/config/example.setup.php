<?php

return new \Phalcon\Config(array(

    // The mode to run the site in. Possible modes are.
    //  - Phalcana::PRODUCTION
    //  - Phalcana::TESTING
    //  - Phalcana::STAGNG
    //  - Phalcana::DEVELOPMENT
    'mode' => Phalcana::DEVELOPMENT,

    // Wether to enable the holding page. This throws a 503 and loads the holding page layout
    'holding' => false,

    // The base url for the site usually the path relative to your web root.
    'base_url' => '/phalcana/',

    // Static base url for the full domain of your site.
    'static_base_url' => 'http://localhost/phalcana/',

    // Any local modules to be merged into the modules defined in the static config
    'modules' => array(
        //'userguide' => MODPATH.'userguide/',
    ),

));
