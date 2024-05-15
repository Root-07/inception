FROM debian:bookworm

# INSTALL ALL PACKAGES NEEDED
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get install -y nginx \
                        openssl \
                        curl \
                        vim

#STOCK THE CERTIFICATE FOR THE CONNEXION SECURE
RUN mkdir -p /etc/nginx/ssl

# SSL CERTIFICATE GENERATION
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -out /etc/nginx/ssl/ael-amin.crt \
    -keyout /etc/nginx/ssl/ael-amin.key  \
    -subj "/C=MA/L=Med/O=1337/OU=STUDENT/CN=ael-amin.42.fr/UID=ael-amin"


#STOCK THE CONFIRATION NGINX FILE
# RUN mkdir -p /var/run/nginx

#our main root folder for the server
#change the owner of the folder
#   RUN chmod 755 /var/www/html
#   RUN chown -R www-data:www-data /var/www/html


#copy the configuration file of nginx
COPY conf/nginx.conf etc/nginx/sites-available/default

#the port nginx will listen to 443 for https
EXPOSE 443

#start the service of nginx
CMD ["nginx", "-g", "daemon off;"]

# COPY ./srcs/requirements/nginx/nginx.conf /etc/nginx/sites-available/default
# COPY ./srcs/requirements/nginx/index.html /var/www/html/


