FROM  alpine:3.12

RUN apk update && apk upgrade
RUN apk add openssl vsftpd bash

RUN mkdir -p /ftps/aashley
RUN adduser --home=/ftps/aashley -D aashley
RUN echo 'aashley:aashley' | chpasswd
RUN chmod -R 777 /ftps
RUN chown -R aashley:aashley /ftps


RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
	-out /etc/ssl/certs/vsftpd.pem -keyout /etc/ssl/certs/vsftpd.key \
	-subj "/C=RU/ST=Moscow/L=Moscow/O=21-school/OU=aashley/CN=aashley"

COPY ./vsftpd.conf /etc/vsftpd/
COPY start_ftps.sh /tmp/start_ftps.sh
RUN chmod 644 /tmp/start_ftps.sh

EXPOSE 20 21 21041 21042 21043 21044

ENTRYPOINT ["bash", "/tmp/start_ftps.sh"]
