FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    zip \ 
    unzip \
    && docker-php-ext-install pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html