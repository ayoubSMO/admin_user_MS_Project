FROM php:fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -ex \
  && apk --no-cache add \
    postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html
COPY . .
RUN composer install --ignore-platform-req=ext-sockets
CMD php artisan serve --host=0.0.0.0
EXPOSE 8002


