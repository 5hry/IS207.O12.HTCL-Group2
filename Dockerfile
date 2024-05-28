FROM php:8.1.10-apache

RUN apt-get update && apt-get install -y zlib1g-dev libpng-dev libonig-dev

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql 

COPY ./ /var/www/html
