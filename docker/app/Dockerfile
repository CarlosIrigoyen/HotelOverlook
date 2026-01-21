FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    libssl-dev \
    pkg-config \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install pdo pdo_pgsql pgsql mbstring exif pcntl bcmath gd zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar Node.js y npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

# Configurar usuario
RUN useradd -G www-data,root -u 1000 -d /home/dockeruser dockeruser \
    && mkdir -p /home/dockeruser/.composer \
    && chown -R dockeruser:dockeruser /home/dockeruser

# Establecer directorio de trabajo
WORKDIR /var/www

# Cambiar permisos (con manejo de errores para directorios que pueden no existir aún)
RUN chown -R dockeruser:dockeruser /var/www \
    && mkdir -p storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache 2>/dev/null || true

# Usuario por defecto
USER dockeruser

# Exponer puerto
EXPOSE 9000

CMD ["php-fpm"]