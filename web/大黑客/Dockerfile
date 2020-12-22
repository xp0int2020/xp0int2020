FROM ubuntu:16.04

RUN { \
        echo mysql-server mysql-server/root_password password 'm0onqwedqdwshiqeqiicxq'; \
        echo mysql-server mysql-server/root_password_again password 'm0onqwedqdwshiqeqiicxq'; \
    } | debconf-set-selections
#ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update
RUN apt-get -y upgrade

RUN apt-get -y install mysql-server
RUN apt-get -y install apache2
RUN apt-get -y install php
RUN apt-get -y install php-mysql
RUN apt-get -y install libapache2-mod-php

COPY db_init.sh /root/db_init.sh
RUN chmod 700 /root/db_init.sh && \
    /root/db_init.sh

VOLUME /var/lib/mysql

RUN rm -r /var/www/
COPY html /var/www/html
RUN chmod -R 755 /var/www/html/


CMD service apache2 restart &service mysql start& tail -F /var/log/apache2/access.log;


