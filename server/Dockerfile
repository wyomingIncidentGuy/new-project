FROM php:8.2-fpm

ENV USER=docker
ENV GROUPNAME=$USER
ENV UID=1000
ENV GID=1000

RUN addgroup \
    --gid "$GID" \
    "$GROUPNAME" \
&&  adduser \
    --disabled-password \
    --gecos "" \
    --home "$(pwd)" \
    --ingroup "$GROUPNAME" \
    --no-create-home \
    --uid "$UID" \
    $USER

RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    default-mysql-client \
    && docker-php-ext-install pdo_mysql mysqli

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./www /var/www/html
COPY entrypoint.sh /entrypoint.sh
COPY composer.json /var/www/html/composer.json

WORKDIR /var/www/html

RUN chmod +x /entrypoint.sh

CMD ["/entrypoint.sh"]