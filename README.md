# Project

This project was made in Laravel 10, which require at least PHP 8.1 version.
The purpose of this project is to try out Filament's Admin Panel.

## Filament
Filament was used to make a starter admin panel (provides us a login and a dashboard page).

To install it in new Laravel applications:

`composer require filament/filament`

After that we can make a new user in the terminal with the help of this command:

`php artisan make:filament-user`

Filament documentation page can be read [here](https://filamentphp.com/docs/2.x/admin/installation).

## Images
To access images publicly, we have to make a symbolic link from public/storage to storage/app/public.

`php artisan storage:link`