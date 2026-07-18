# Use the correct, official tag
FROM dunglas/frankenphp:php8.4-alpine

# Install the MySQL PDO extension
RUN install-php-extensions pdo_mysql

# Copy your application code
COPY . /app/