FROM debian:bookworm

RUN apt-get update && apt-get -y install curl \
						php-fpm \
						php-mysql \
						mariadb-client \
						vim

RUN sed -i "s|listen = /run/php/php8.2-fpm.sock|listen = 0.0.0.0:9000|" /etc/php/8.2/fpm/pool.d/www.conf
COPY tools/script.sh .

RUN	chmod +x script.sh

CMD [ "./script.sh" ]
