FROM php:7.4-apache

# Install MySQL extensions for PHP and Git

RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

# Install Composer
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
RUN alias composer='php /usr/bin/composer'

# COPY src /var/www/html/
EXPOSE 80/tcp
EXPOSE 443/tcp
