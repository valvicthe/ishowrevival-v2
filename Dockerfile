FROM dunglas/frankenphp:php8.4-alpine

RUN install-php-extensions pdo_mysql

COPY . /app/

# This tells FrankenPHP to listen on the PORT assigned by Railway
ENV SERVER_NAME=:80
CMD ["frankenphp", "run", "--config", "/app/Caddyfile"]