FROM debian:bullseye

RUN apt update && apt install php-fpm -y 
RUN mkdir -p /run/php/
RUN sed -i "s/listen = \/run\/php\/php7.4-fpm.sock/listen = 0.0.0.0:9000/" /etc/php/7.4/fpm/pool.d/www.conf
CMD [ "php-fpm7.4", "-F" ]