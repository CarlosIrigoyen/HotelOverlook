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

# Copiar código de la aplicación
COPY . /var/www

# Cambiar permisos
RUN chown -R dockeruser:dockeruser /var/www

# Usuario por defecto
USER dockeruser

# Exponer puerto
EXPOSE 9000

CMD ["php-fpm"]