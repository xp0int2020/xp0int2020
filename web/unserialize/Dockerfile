FROM ubuntu:18.04

RUN sed -i "s/http:\/\/archive.ubuntu.com/http:\/\/mirrors.ustc.edu.cn/g" /etc/apt/sources.list
RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get -y install tzdata
RUN apt-get -y install apache2
RUN apt-get -y install php


RUN rm -r /var/www/
COPY html /var/www/html
RUN chmod -R 755 /var/www/html/

COPY flag /flag
RUN chmod 444 /flag

CMD service apache2 restart & tail -F /var/log/apache2/access.log;


