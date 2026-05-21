# Use an official PHP image with Apache
FROM php:8.2-apache

# Copy all files from your current directory to the web root
COPY . /var/www/html/

# Set the correct permissions for Apache
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80
EXPOSE 80

# Apache handles the rest automatically
