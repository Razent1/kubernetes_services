#!/bin/bash

# Создаем бд и таблички внутри нее
mysql_install_db --datadir=/var/lib/mysql

# Запус бд в безопасном режиме
mysqld_safe -u root & sleep 5

mysql -u root -e "CREATE DATABASE wordpress;"
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'aashley'@'%' IDENTIFIED BY 'aashley';"
mysql -u root -e "FLUSH PRIVILEGES;"

mysql wordpress -u root < wordpress.sql

# Бесконечноая работа контейнера
sleep infinity & wait
