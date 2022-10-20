<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Les Commandes pour Exécution de migrations
   - Pour crée migration avec les fonction :
     #php artisan make:migration create_flights_table  
   - Pour exécuter toutes vos migrations :
    #php artisan migrate
   - Si vous souhaitez voir quelles migrations ont été exécutées : 
   #php artisan   migrate:status
   - Si vous souhaitez voir les instructions SQL qui seront exécutées par les migrations sans les exécuter réellement :  
   #php artisan migrate --pretend



