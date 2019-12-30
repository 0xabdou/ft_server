#!/bin/bash

tar xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages/ /usr/share/phpmyadmin
ln -s /usr/share/phpmyadmin /var/www/html
mkdir -p /usr/share/phpmyadmin/tmp
chmod 777 /usr/share/phpmyadmin/tmp
