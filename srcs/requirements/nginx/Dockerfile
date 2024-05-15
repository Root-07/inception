FROM debian:bullseye

RUN apt update && apt install nginx -y

COPY conf/default.conf /etc/nginx/sites-enabled/ng.conf
# COPY index.html /var/www/html

CMD [ "nginx" , "-g" , "daemon off;"]