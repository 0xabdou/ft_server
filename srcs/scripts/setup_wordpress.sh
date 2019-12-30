#!/bin/bash

tar xvf latest.tar.gz
mv wordpress /var/www/html
chown -R www-data:www-data /var/www/html/wordpress
