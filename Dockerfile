ARG PHP_VERSION=8.5
FROM php:${PHP_VERSION}-apache

# Install PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Point Apache's document root to the "public" folder (LavaLust's front controller)
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's|<Directory /var/www/>|<Directory /var/www/html/public>|' /etc/apache2/apache2.conf

# Copy app files
COPY . /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Startup script that binds Apache to Render's runtime $PORT
COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80

CMD ["/start.sh"]