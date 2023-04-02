<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Basic queues in laravel
- git clone
- composer install
- php artisan key:generate
- cp .env.example .env
- pico .env (QUEUE_CONNECTION=database)
- php artisan migrate
- php artisan queue:work
