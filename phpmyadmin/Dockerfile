FROM  alpine:3.12

RUN apk update && apk upgrade
RUN apk add nginx bash wget

RUN apk add php7 php7-fpm php7-mbstring php7-gd php7-json php7-session php7-mysqli php7-zlib php7-curl

RUN adduser -D -g 'aashley' aashley
RUN mkdir -p /www/phpmyadmin
RUN chown -R aashley:aashley /var/lib/nginx
RUN chown -R aashley:aashley /www

RUN mkdir -p var/run/nginx

RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf.orig
COPY ./nginx.conf /etc/nginx/

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz
RUN tar -C /www/phpmyadmin -xvzf phpMyAdmin-5.0.4-english.tar.gz --strip-components 1
RUN rm -rf phpMyAdmin-5.0.4-english.tar.gz

COPY config.inc.php /www/phpmyadmin
COPY setup_phpmyadmin.sh /tmp/setup_phpmyadmin.sh
RUN chmod 644 /tmp/setup_phpmyadmin.sh

EXPOSE 5000

ENTRYPOINT ["bash", "/tmp/setup_phpmyadmin.sh"]
