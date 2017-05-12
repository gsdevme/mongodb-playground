FROM php:7.1-fpm

RUN apt-get update && apt-get install libpcre3-dev zlib1g-dev libpq-dev libicu-dev -y && \
    docker-php-ext-configure intl && \
    docker-php-ext-install intl opcache && \
    pecl install mongodb && \
    docker-php-ext-enable mongodb && \
    apt-get autoclean -y
