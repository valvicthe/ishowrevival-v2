FROM dunglas/frankenphp:latest-php8.4

# Install the MySQL PDO extension
RUN install-php-extensions pdo_mysql

# Copy your application code
COPY . /app/