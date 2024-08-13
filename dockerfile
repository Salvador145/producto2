# Usa una imagen base de PHP
# Usa una imagen base de PHP
FROM php:8.2-apache

# Copia tu archivo PHP al contenedor
COPY app/ /var/www/html/

# Expon el puerto 80
EXPOSE 80
