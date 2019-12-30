FROM debian:buster

MAINTAINER aouahib aouahib@student.1337.ma


RUN	apt-get update && apt-get upgrade;
RUN	apt-get install -y nginx;
RUN	apt-get install -y mariadb-server;
RUN	apt-get install -y php7.3-fpm php-mysql php-cli php-mbstring;
RUN	apt-get install -y openssl;
RUN	apt-get install -y wget;
RUN	wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz;
RUN	wget https://wordpress.org/latest.tar.gz;

ADD srcs srcs

RUN	bash ./srcs/scripts/setup_ssl.sh;
RUN	./srcs/scripts/setup_phpmyadmin.sh;
RUN	./srcs/scripts/setup_wordpress.sh;
RUN	./srcs/scripts/setup_databases.sh

COPY	./srcs/config/default /etc/nginx/sites-available/
COPY	./srcs/config/config.inc.php /usr/share/phpmyadmin/
COPY	./srcs/config/wp-config.php /var/www/html/wordpress/

ENTRYPOINT ./srcs/scripts/start_services.sh
