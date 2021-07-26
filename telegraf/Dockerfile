FROM  alpine:3.12

RUN apk update && apk upgrade
RUN apk add -X http://dl-cdn.alpinelinux.org/alpine/edge/community/ telegraf
RUN mkdir -p /etc/telegraf

COPY telegraf.conf /etc/telegraf/

ENTRYPOINT telegraf --config /etc/telegraf/telegraf.conf
