#!/bin/bash

minikube start --vm-driver=virtualbox
minikube addons enable metallb
kubectl apply -f ./metallb/configmap.yaml

eval "$(minikube -p minikube docker-env)"
docker build -t nginx_image nginx
docker build -t mysql_image mysql
docker build -t phpmyadmin_image phpmyadmin
docker build -t wordpress_image wordpress
docker build -t ftps_image ftps
docker build -t influxdb_image influxdb
docker build -t grafana_image grafana
docker build -t telegraf_image telegraf

kubectl apply -f ./nginx/nginx.yaml
kubectl apply -f ./mysql/mysql.yaml
kubectl apply -f ./phpmyadmin/phpmyadmin.yaml
kubectl apply -f ./wordpress/wordpress.yaml
kubectl apply -f ./ftps/ftps.yaml
kubectl apply -f ./grafana/grafana.yaml
kubectl apply -f ./influxdb/influxdb.yaml
kubectl apply -f ./telegraf/telegraf.yaml

minikube dashboard
