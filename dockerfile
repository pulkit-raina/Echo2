# Use an official PHP and Apache runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy all project files into the container
COPY . /var/www/html/

# Expose port 80 (the default for Apache)
EXPOSE 80

ENV port = 8080

# Start the Apache server
CMD ["apache2-foreground"]