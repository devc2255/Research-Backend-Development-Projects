# Use an official PHP-Apache image
FROM php:8.2-apache

# Copy all files from your current directory to the web root
COPY . /var/www/html/

# Ensure the server listens on the port Render expects
EXPOSE 80
