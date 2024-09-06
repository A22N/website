# Use Ubuntu as the base image
FROM ubuntu:20.04

# Set noninteractive mode and configure time zone
ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Asia/Ho_Chi_Minh

# Install Apache, PHP, MySQLi, and other dependencies
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql wget nano curl git && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html/

# Copy the application files
COPY . /var/www/html/

# Change permissions
RUN chown -R www-data:www-data /var/www/html/uploads/
RUN chmod -R 777 /var/www/html/uploads/

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["apache2ctl", "-D", "FOREGROUND"]
