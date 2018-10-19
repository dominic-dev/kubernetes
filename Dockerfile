# docker build . -t my-php-app:1.0.0

FROM php:7.2-fpm
RUN apt-get update
RUN apt-get -y install vim
RUN mkdir /app
Add app /app
