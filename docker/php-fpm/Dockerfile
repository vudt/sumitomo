FROM php:7.3-fpm

RUN apt-get update -y 
RUN apt-get install vim libzip-dev zip -y 
RUN docker-php-ext-install mysqli 
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo 
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-enable mysqli 
RUN docker-php-ext-enable pdo_mysql 
RUN rm -rf /var/lib/apt/lists/*

EXPOSE 9000

#CMD ["httpd-foreground"]