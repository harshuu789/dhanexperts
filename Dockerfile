FROM php:8.2-apache

# Enable Apache Rewrite
RUN a2enmod rewrite

# Set Apache Document Root to public/
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install system dependencies & composer
RUN apt-get update && apt-get install -y \
    curl zip unzip git \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy project
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install PHP extensions (NO MYSQL)
RUN docker-php-ext-install pdo mbstring

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Clear config
RUN php artisan config:clear
RUN php artisan cache:clear

# Generate key only at container start (handled by entrypoint)
COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80
