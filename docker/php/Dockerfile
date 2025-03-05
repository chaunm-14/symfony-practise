FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install

EXPOSE 9000

CMD ["php-fpm"]