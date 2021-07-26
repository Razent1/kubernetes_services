FROM  alpine:3.12

RUN apk update && apk upgrade
RUN apk add -X http://dl-cdn.alpinelinux.org/alpine/edge/community/ grafana

COPY /config/dashboards/* /usr/share/grafana/conf/dashboards/
COPY /config/provisioning/dashboards/* /usr/share/grafana/conf/provisioning/dashboards/
COPY /config/provisioning/datasources/* /usr/share/grafana/conf/provisioning/datasources/

EXPOSE 3000

ENTRYPOINT [ "grafana-server", "--homepath=/usr/share/grafana" ]
