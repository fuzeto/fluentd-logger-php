FROM phpdockerio/php7-fpm:latest

ARG DEBIAN_FRONTEND=noninteractive

WORKDIR /var/www/html

COPY composer.json /var/www/html
COPY index.php /var/www/html

COPY vendor /var/www/html/