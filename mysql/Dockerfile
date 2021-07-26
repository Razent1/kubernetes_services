FROM  alpine:3.12

RUN apk update && apk upgrade
RUN apk add mysql mysql-client bash

COPY start_mysql.sh /tmp/start_mysql.sh
COPY wordpress.sql my.cnf ./

RUN mkdir -p /run/mysqld
RUN mv my.cnf /etc/

RUN chmod 644 /tmp/start_mysql.sh

#Создание тома для последующего сохранения данных на машине
VOLUME ["/var/lib/mysql"]

EXPOSE 3306

ENTRYPOINT ["bash", "/tmp/start_mysql.sh"]