FROM php:7.4-fpm

RUN apt-get update && apt-get install -y libzip-dev unzip \
    && docker-php-ext-install -j$(nproc) pdo

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
