# docker build . -t my-php-app:1.0.0

FROM php:7.2-fpm
RUN apt-get update
RUN apt-get -y install vim libpng-dev zip unzip
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip

RUN mkdir /app
Add app /app
