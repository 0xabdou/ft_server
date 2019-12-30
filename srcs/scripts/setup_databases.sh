#!/bin/bash

service mysql start
mariadb < /usr/share/phpmyadmin/sql/create_tables.sql
mariadb < ./srcs/db_query/pma_priv
mariadb < ./srcs/db_query/wp_db
