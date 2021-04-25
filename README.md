<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# CRUD Horse Race manager app

## Description:

Basic web app developed with Laravel framework. 

## Project features

- Guest page for review
- Admin page with authentication
- CRUD operations in Admin page

## Launch instructions:

-   If you do not have composer package manager installed on your system, install it (installation instructions [here](https://getcomposer.org/download)).
-   Clone this repository or download it as a ZIP package.
-   Open it with Visual Studio Code or your preferred code editor.
-   Create a new schema(database) in you MySQL server.
-   Rename **'.env.example'** file to **'.env'** inside of the project's root directory and configure the database information.
-   Using GitBash, CMD or other terminal in your code editor:
    -   run if composer is installed locally <pre>php <'path to composer.phar file location'>/composer.phar install</pre>
    -   run if composer is installed on your system globally  <pre>php composer.phar install</pre>
-   Run <pre>php artisan key:generate</pre>
-   Run migrations to create tables<pre>php artisan migrate</pre> 
-   Fill tables with dummy data <pre>php artisan db:seed</pre>
-   Follow the link that appears in the terminal after running <pre>php artisan serve</pre>


## Screenshots

![1](https://user-images.githubusercontent.com/72792707/115993224-910e0200-a5da-11eb-95ee-ea3ba80948fc.JPG)

## Author:

[Tomas L.](https://github.com/tomas-land)

