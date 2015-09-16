[![Latest Stable Version](https://poser.pugx.org/phalcana/project/v/stable)](https://packagist.org/packages/phalcana/project)
[![Build Status](https://travis-ci.org/braf/phalcana-project.svg?branch=master)](https://travis-ci.org/braf/phalcana-project)
[![Total Downloads](https://poser.pugx.org/phalcana/project/downloads)](https://packagist.org/packages/phalcana/project)
[![License](https://poser.pugx.org/phalcana/project/license)](https://packagist.org/packages/phalcana/project)


# Phalcana Project

This is a starting point for your Phalcana base project and is meant as a template for you to add your code. 
This repository is not meant to be kept up to date with your project as the main components of the framework 
are loaded in via composer.

## Requirements

 - PHP 5.4+
 - [Phalcon](http://phalconphp.com/en/download)


## Installing with composer

```bash
composer create-project phalcana/project project-folder
```

### Setting up vhost

The Phalcana project requires rewrite rules. Please find below examples for nginx and apache you get you started

#### nginx vhost

```nginx
server {
    listen 80;
    server_name phalcana.com;
    root /var/www/phalcana;


    access_log /var/log/nginx/phalcana.com.access.log;
    error_log /var/log/nginx/phalcana.com.error.log;

    index index.php index.html index.htm;

    try_files $uri $uri/ @rewrite;

    location @rewrite {
        rewrite ^(.*)$ /index.php?_url=$1;
    }

    location ~ \.php {
        # try_files    $uri =404;

        fastcgi_index  /index.php;
        fastcgi_pass   unix:/var/run/php5-fpm.sock;

        include fastcgi_params;
        fastcgi_split_path_info       ^(.+\.php)(/.+)$;
        fastcgi_param PATH_INFO       $fastcgi_path_info;
        fastcgi_param PATH_TRANSLATED $document_root$fastcgi_path_info;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

#### Apache .htaccess

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Replace with the directory of your installation
    RewriteBase /

    # Remove trailing slashes unless the directory exists
    RewriteCond %{REQUEST_URI} (.*)/$
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)/$ $1 [L,R=301]

    # Protect application and system root files from being viewed
    RewriteRule ^(?:app|modules|system|example.htaccess|README.md|bower.json|Gruntfile.js|composer.json|package.json|phalcana|phalcana.bat)\b.* index.php?_url=/$0 [QSA,L]


    # Allow any files or directories that exist to be displayed directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d

    # Rewrite all other URLs to index.php/URL  [QSA,L]
    RewriteRule .* index.php?_url=/$0 [QSA,L]

</IfModule>
```

## Getting started

You can check that your installation has been successful by visiting configured path in your browser. If the installation completed successfully you should see the welcome page.

Now that you have installed the basic setup you may start building your project. For more information on using the framework please visit the [Phalcana documentation](http://phalcana.com/guide). Phalcana is built on top of [Phalcon](http://phalconphp.com/en/download) so you may also need to refer to the documentation for the [Phalcon framework](http://docs.phalconphp.com/).

