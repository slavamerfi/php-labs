# Використовуємо офіційний образ PHP
FROM php8.0-apache

# Встановлюємо необхідні пакети для розширень mysqli та pdo_mysql
RUN apt-get update && apt-get install -y \
    default-libmysqlclient-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Копіюємо ваш код PHP в контейнер
COPY . /var/www/html