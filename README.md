<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Install Laravel

```bash
cd your parent_folder

composer create-project --prefer-dist laravel/laravel:^9.2 project_name

cd project_name

code . -r

php artisan serve

ctrl + c

```

## Configuration

>download and installation sass, bootstrap, fontawesome and vite

```bash

composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

# add in vite.config.js inside alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copy webfonts in node_modules/@fortawesome and paste in resource

#add in scss/app.scss

$fa-font-path:"../webfonts" !default;
@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

#add partials in scss and add in partials _variables.scss

#add layouts in views and inside put app.blade.php

#cut and paste the code in welcome.blade.php in app.blade.php

#add yields in app and rename 'welcome' to 'home'

```
