FROM octavianparalescu/docker-zf2
LABEL maintainer="Douglas Santana <douglas.santana.dev@gmail.com>"
USER root

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN a2enmod rewrite

RUN apt-get update && apt-get install -y git libzip-dev zip unzip nano

RUN curl -sS https://getcomposer.org/installer | php -- --version=2.0.0 --install-dir=/usr/bin --filename=composer
RUN chmod +x /usr/bin/composer 

RUN mkdir -p /var/www/.composer
RUN mkdir -p /var/www/.cache
RUN chown -R www-data:www-data /var/www/.composer /var/www/.cache

RUN echo "date.timezone = America/Sao_Paulo" > /usr/local/etc/php/php.ini

RUN docker-php-ext-configure zip --with-libzip && docker-php-ext-install zip

USER www-data
WORKDIR /var/www/html