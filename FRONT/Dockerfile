FROM php:8.2-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql  && docker-php-ext-enable pdo pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

EXPOSE 80

COPY . .