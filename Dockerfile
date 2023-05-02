FROM php:8.0-apache

# Set UID and GID for www-data to match the local user
ARG LOCAL_UID
ARG LOCAL_GID

RUN if [ -n "${LOCAL_UID}" ] && [ -n "${LOCAL_GID}" ]; then \
        usermod -u ${LOCAL_UID} www-data && \
        groupmod -g ${LOCAL_GID} www-data; \
    fi

# Enable mod_rewrite
RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html