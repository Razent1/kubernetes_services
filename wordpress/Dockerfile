FROM alpine:3.12
RUN apk update && apk upgrade
RUN apk add nginx bash wget

RUN apk add php7 php7-fpm php7-mbstring php7-gd php7-json php7-session php7-mysqli php7-zlib php7-curl

RUN adduser -D -g 'aashley' aashley
RUN mkdir -p /www/wordpress
RUN chown -R aashley:aashley /var/lib/nginx
RUN chown -R aashley:aashley /www

RUN mkdir -p var/run/nginx

RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf.orig
COPY ./nginx.conf /etc/nginx/

RUN wget https://wordpress.org/wordpress-5.6.tar.gz
RUN tar -C /www/wordpress/ -xvzf wordpress-5.6.tar.gz --strip-components 1
RUN rm -rf wordpress-5.6.tar.gz
RUN chown -R aashley:aashley /www/wordpress/
RUN chmod -R 755 /www/wordpress/

COPY setup_wordpress.sh /tmp/setup_wordpress.sh
COPY wp-config.php /www/wordpress/
RUN chmod 644 /tmp/setup_wordpress.sh

EXPOSE 5050

ENTRYPOINT ["bash", "/tmp/setup_wordpress.sh"]