FROM php:7.4-apache

COPY index.php /var/www/html

RUN chmod -R 744 /var/www/html/
RUN chown -R www-data:www-data /var/www/html/

RUN docker-php-ext-install mysqli
