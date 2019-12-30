#!/bin/bash

mkdir /etc/nginx/ssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt \
	    -subj "/C=MA/ST=Agadir/L=Agadir/O=Imginary company/OU=IT/CN=localhost"
