FROM php:8.2-apache

# Enable Apache Rewrite
RUN a2enmod rewrite

# Install system dependencies & Composer
RUN apt-get update && apt-get install -y \
    curl zip unzip git \
    && curl -sS https://getcomposer.org/installer | php \
        -- --install-dir=/usr/local/bin --filename=composer

# Copy project source
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Copy and allow entrypoint script to run
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Expose HTTP port
EXPOSE 80

# Start container with entrypoint
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]
