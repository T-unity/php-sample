FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/
RUN apt-get update \
    && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libonig-dev \
    && docker-php-ext-install pdo_mysql mysqli gd iconv exif
