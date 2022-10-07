FROM php:7.2-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
#COPY --from=composer/composer /usr/bin/composer /usr/bin/composer
# Install Composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer