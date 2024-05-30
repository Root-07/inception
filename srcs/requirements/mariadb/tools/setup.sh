#!/bin/bash

service mariadb start

mariadb -e "CREATE DATABASE $DB_NAME; CREATE USER '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';
			GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';
			FLUSH PRIVILEGES;"

service mariadb stop

exec mysqld -u root
