FROM php:7.3-fpm-alpine
# Install php extension
RUN docker-php-ext-install pdo pdo_mysql
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
