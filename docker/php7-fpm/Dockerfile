FROM alpine:3.6

LABEL maintainer="Vincent Composieux <vincent.composieux@gmail.com>"

RUN apk add --no-cache \
    php7-fpm \
    php7-apcu \
    php7-ctype \
    php7-curl \
    php7-dom \
    php7-gd \
    php7-iconv \
    php7-imagick \
    php7-json \
    php7-intl \
    php7-mcrypt \
    php7-mbstring \
    php7-opcache \
    php7-openssl \
    php7-pdo \
    php7-pdo_mysql \
    php7-mysqli \
    php7-xml \
    php7-xmlwriter \
    php7-zlib \
    php7-phar \
    php7-tokenizer \
    php7-session \
    php7-xdebug \
    php7-simplexml \
    make \
    curl \
    shadow

RUN rm -rf /var/cache/apk/* \
    && rm -rf /tmp/* \
    && rm /etc/php7/php-fpm.d/* \
    && mkdir -p /var/log/php \
    && addgroup -g 1000 -S www-data \
    && adduser -u 1000 -D -S -G www-data www-data

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
RUN /usr/bin/composer

COPY entrypoint.sh /entrypoint.sh
COPY graphql.ini /etc/php7/php-fpm.d/graphql.ini
COPY graphql.ini /etc/php7/cli/conf.d/graphql.ini
COPY symfony.pool.conf /etc/php7/php-fpm.d/symfony.pool.conf

ENTRYPOINT /entrypoint.sh

WORKDIR /var/www/graphql

EXPOSE 9000
