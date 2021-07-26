FROM  alpine:3.12

RUN apk update && apk upgrade
RUN apk add --no-cache nginx openssl openssh supervisor

# Новый пользователь nginx
RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www

RUN mkdir -p var/run/nginx

RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf
COPY nginx.conf /etc/nginx/

RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
	-out /etc/ssl/certs/aashley.pem -keyout /etc/ssl/certs/aashley.key \
	-subj "/C=RU/ST=Moscow/L=Moscow/O=21-school/OU=aashley/CN=aashley"

COPY index.html /www/

EXPOSE 80 443

ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]
