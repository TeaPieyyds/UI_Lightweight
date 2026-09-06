# Multi-stage build for PHP deployment
FROM node:22-alpine AS builder

WORKDIR /app

# Copy package files
COPY package*.json ./

# Install dependencies
RUN npm ci --only=production

# Copy source
COPY . .

# Build Next.js app
RUN npm run build

# Production stage
FROM php:8.3-apache

# Copy Next.js output
COPY --from=builder /app/out /var/www/html
COPY --from=builder /app/node_modules /var/www/html/node_modules

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy Apache config
COPY .htaccess /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
