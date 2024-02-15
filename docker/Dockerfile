# Set master image
FROM php:8.1-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# Install Additional dependencies
RUN apk update && apk add --no-cache \
    build-base shadow vim curl \
    php8.1 \
    php8.1-fpm \
    php8.1-common \
    php8.1-pdo \
    php8.1-pdo_mysql \
    php8.1-mysqli \
    php8.1-mcrypt \
    php8.1-mbstring \
    php8.1-xml \
    php8.1-openssl \
    php8.1-json \
    php8.1-phar \
    php8.1-zip \
    php8.1-gd \
    php8.1-dom \
    php8.1-session \
    php8.1-zlib

# Add and Enable required Extenstions
RUN docker-php-ext-install pdo pdo_mysql exif
RUN docker-php-ext-enable pdo_mysql exif

# Add imagick
RUN apk add --update --no-cache autoconf g++ imagemagick imagemagick-dev libtool make pcre-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apk del autoconf g++ libtool make pcre-dev

# Install PHP Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Remove Cache
RUN rm -rf /var/cache/apk/*

# Add UID '1000' to www-data
RUN usermod -u 1000 www-data

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www/html

# Change current user to www
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
