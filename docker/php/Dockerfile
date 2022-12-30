FROM php:8.2-rc-cli

WORKDIR /var/www/html

USER root:root

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

ARG UID=1000
ARG GID=1000

RUN groupmod -g ${GID} www-data \
    && usermod -u ${UID} -g www-data www-data \
    && chown -hR www-data:www-data \
        /var/www \
        /usr/local/

USER www-data:www-data
