#!/bin/bash

# if []
#Download wp-cli
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

#Change to web root directory
cd /var/www/html

# Download and configure WordPress
wp core download --allow-root

#Create wp-config.php

wp config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASSWORD --dbhost=mariadb --skip-check --allow-root

while ! wp db check --allow-root; do
	sleep 1
done

# Install WordPress
wp core install --url=$DOMAIN_NAME --title=$WP_TITLE --admin_user=$WP_ADMIN_USER --admin_password=$WP_ADMIN_PASSWORD --admin_email=$WP_EMAIL --allow-root

#Create an additional user
wp user create $WP_USER $WP_USER_EMAIL --role=editor --user_pass=$WP_USER_PASSWORD --allow-root
# fi
#Start PHP-FPM
exec php-fpm8.2 -F
