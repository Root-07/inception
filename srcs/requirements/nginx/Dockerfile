FROM debian:bookworm

RUN apt-get -y update
RUN apt-get install -y nginx \
                        openssl \
                        vim

RUN mkdir -p /etc/nginx/ssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -out /etc/nginx/ssl/ael-amin.crt \
    -keyout /etc/nginx/ssl/ael-amin.key  \
    -subj "/C=MA/L=Med/O=1337/OU=STUDENT/CN=ael-amin.42.fr/UID=ael-amin"

COPY conf/nginx.conf etc/nginx/sites-available/default

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]



