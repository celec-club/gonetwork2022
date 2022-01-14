FROM php:8-fpm
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN apt-get update && apt-get install vim -y && \
    apt-get install openssl -y && \
    apt-get install libssl-dev -y && \
    apt-get install wget -y && \
    apt-get install git -y && \
    apt-get install procps -y && \
    apt-get install libboost-all-dev -y && \
    apt-get install htop -y && \
    apt-get install libzip-dev -y && \
    apt-get install libpng-dev -y
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions gd
RUN docker-php-ext-install pdo pdo_mysql zip pcntl gd pcntl
RUN install-php-extensions memcached
RUN docker-php-ext-install sockets
RUN install-php-extensions gd
RUN install-php-extensions imagick
RUN install-php-extensions exif
RUN docker-php-ext-enable pdo pdo_mysql zip pcntl gd pcntl memcached sockets gd imagick exif
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer