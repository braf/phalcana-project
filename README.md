## Requirements

 - PHP 5.4+
 - [Phalcon](http://phalconphp.com/en/download)


### Installing with composer

composer create-project phalcana/core project-folder



### Manual installation

 - Give write permissions to the `app/logs/` and `app/cache/` folders.
 - Copy `example.htaccees` to `.htaccess` and configure the rewrite base to point to site directory relative to the web root.
 - Copy `app/config/example.setup.php` to `app/config/setup.php` and configure the `base_url` and `static_base_url`.


## Getting started

You can check that your installation has been successful by visiting configured path in your browser. If the installation completed successfully you should see the welcome page.

Now that you have installed the basic setup you may start building your project. For more information on using the framework please visit the [Phalcana documentation](http://phalcana.com/guide). Phalcana is built on top of [Phalcon](http://phalconphp.com/en/download) so you may also need to refer to the documentation for the [Phalcon framework](http://docs.phalconphp.com/).
