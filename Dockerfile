# Use PHP 8.1 FPM image as a base
FROM php:8.1-apache

# Install system dependencies
RUN apt-get update && apt-get install --fix-missing -y \
    libmcrypt-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y nodejs

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Add this line to your Dockerfile to install supervisord
RUN apt-get update && apt-get install -y supervisor

# Add this line to copy the supervisord configuration file
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Set the working directory
WORKDIR /app

# Copy the existing application files
COPY . /app

# Install Composer dependencies
RUN composer install

# Install NPM dependencies and build
RUN npm install && npm run build

# Expose the port
EXPOSE 8000

# Start the application
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
