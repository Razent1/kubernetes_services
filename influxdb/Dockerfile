FROM  alpine:3.12

RUN apk update && apk upgrade
RUN apk add influxdb bash

EXPOSE 8086

ENTRYPOINT influxd run -config /etc/influxdb.conf
