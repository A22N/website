# Use the official Ubuntu image from the Docker Hub
FROM ubuntu:20.04

# Install Apache, PHP, and required PHP modules
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql wget nano

# Set working directory
WORKDIR /var/www/html/

# Remove the default index.html
RUN rm -rf index.html

# Copy the website files into the container
COPY ./Website ./

# Check if the directory exists before changing permissions
RUN if [ -d "/var/www/html/images/" ]; then \
        chown -R www-data:www-data /var/www/html/images/ && \
        chmod -R 777 /var/www/html/images/; \
    fi

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]
